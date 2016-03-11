<div class="container content-padding">
	<h2>
	<?php echo __('Media'); ?>
		<?php
			echo $this->Html->link('Adicionar',array('action'=>'add'),array('class'=>'btn btn-md btn-info pull-right','style'=>'color: black; font-weight: bold'));
		?>
	</h2>
	<table class="table table-hover table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mediatype'); ?></th>
			<th><?php echo $this->Paginator->sort('source'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('share'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($media as $media): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($media['User']['username'], array('controller' => 'users', 'action' => 'view', $media['User']['id'])); ?>
		</td>
		<td><?php echo h($media['Media']['mediatype']); ?>&nbsp;</td>
		<td><?php echo h($media['Media']['source']); ?>&nbsp;</td>
		<td><?php echo h($media['Media']['title']); ?>&nbsp;</td>
		<td><?php echo h($media['Media']['description']); ?>&nbsp;</td>
		<td><?php echo h($media['Media']['url']); ?>&nbsp;</td>
		<td><?php echo h($media['Media']['active']); ?>&nbsp;</td>
		<td><?php echo h($media['Media']['share']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'showmedia', $media['Media']['id']),array('class'=>'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $media['Media']['id']),array('class'=>'btn btn-xs btn-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $media['Media']['id']),array('class'=>'btn btn-xs btn-danger','confirm' => __('Are you sure you want to delete # %s?', $media['Media']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
