<?php
class Controller_Request extends Controller_Template
{

	public function action_index()
	{
		$data['requests'] = Model_Request::find('all');
		$this->template->title = "Requests";
		$this->template->content = View::forge('request/index', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Request::validate('create');

			if ($val->run())
			{
				$request = Model_Request::forge(array(
					'body' => Input::post('body'),
					'ip' => Input::ip()
				));

				if ($request and $request->save())
				{
					Session::set_flash('success', 'Added request #'.$request->id.'.');

					Response::redirect('request');
				}

				else
				{
					Session::set_flash('error', 'Could not save request.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Requests";
		$this->template->content = View::forge('request/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('request');

		if ( ! $request = Model_Request::find($id))
		{
			Session::set_flash('error', 'Could not find request #'.$id);
			Response::redirect('request');
		}

		$val = Model_Request::validate('edit');

		if ($val->run())
		{
			$request->body = Input::post('body');
			$request->ip = Input::post('ip');

			if ($request->save())
			{
				Session::set_flash('success', 'Updated request #' . $id);

				Response::redirect('request');
			}

			else
			{
				Session::set_flash('error', 'Could not update request #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$request->body = $val->validated('body');
				$request->ip = $val->validated('ip');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('request', $request, false);
		}

		$this->template->title = "Requests";
		$this->template->content = View::forge('request/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('request');

		if ($request = Model_Request::find($id))
		{
			$request->delete();

			Session::set_flash('success', 'Deleted request #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete request #'.$id);
		}

		Response::redirect('request');

	}

}
