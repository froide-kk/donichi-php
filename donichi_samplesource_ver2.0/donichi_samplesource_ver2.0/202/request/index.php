<h2>Listing <span class='muted'>Requests</span></h2>
<br>
<?php if ($requests): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Body</th>
			<th>Ip</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($requests as $item): ?>		<tr>

			<td><?php echo $item->body; ?></td>
			<td><?php echo $item->ip; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('request/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('request/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Requests.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('request/create', 'Add new Request', array('class' => 'btn btn-success')); ?>

</p>
