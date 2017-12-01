<div class="container">
	<div class="row">
		<div class="col-md-8">

		</div>
		<div class="col-md-4">
			<h1>Please Request ！ </h1>
			<p> ここは、弊社総務課向けのリクエストサイトです。つかなくなった蛍光灯、なくなりそうなお茶の葉その他社内のこまごましたことで気になることがあればどんどん投稿してください。</p>
			<form action="" method="post">
				<div class="col-md-12">
					<?php echo Html::anchor('request/create','Add new Request', array('class' => 'btn btn-success')); ?>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="well text-center">
				猫の手さえ借りたいあなたへ♪
			</div>
		</div>
	</div>
	<div class="row">
		<?php foreach ($requests as $item): ?>
			<div class="col-md-4" >
				<h3><?php echo Str::truncate($item->body,12, '', true); ?></h3>
				<p>【投稿日時】
				<?php echo date("Y-m-d H:i", $item->created_at); ?></p>
				<p>【IP】<?php echo $item->ip; ?></p>
				<p><?php echo Str::truncate($item->body,80, '', true); ?></p>
				<?php echo Html::anchor('request/edit/'.$item->id, '<i class="icon-wrench">
				</i> Edit', array('class' => 'btn btn-default btn-sm')); ?>
				<?php echo Html::anchor('request/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm(' このデータを削除します。よろしいですか?')")); ?>
			</div>
		<?php endforeach; ?>
	</div>
	<!-- /.row -->
</div>