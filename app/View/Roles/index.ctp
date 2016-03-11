<div class="container content-padding">
	<div class="col-xs-4 col-sm-3 col-md-2">
		<h2><?php echo __('Roles'); ?></h2>
	</div>
	<div class="col-xs-4 col-sm-6 col-md-8 text-center">
		<p>
		<?php
			echo $this->Paginator->prev('<span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>', array('escape'=>false), null, array('class' => 'prev disabled','escape'=>false));
			echo $this->Paginator->numbers(array('separator' => ' '));
			echo $this->Paginator->next(' <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>', array('escape'=>false), null, array('class' => 'next disabled','escape'=>false));
			echo '</p><p>';
			echo $this->Paginator->counter(array(
				'format' => __('Page {:page}/{:pages}'
				)));
		?>
		</p>
	</div>			
	<div class="col-xs-4 col-sm-3 col-md-2 right-block">
		<h2><?php
			echo $this->Html->link('Adicionar',array('action'=>'add'),array('class'=>'btn btn-md btn-info pull-right','style'=>'color: black; font-weight: bold'));
		?></h2>
	</div>
	<table class="table table-hover table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($roles as $role): ?>
	<tr>
		<td><?php echo h($role['Role']['id']); ?>&nbsp;</td>
		<td><?php echo h($role['Role']['name']); ?>&nbsp;</td>
		<td><?php echo h($role['Role']['description']); ?>&nbsp;</td>
		<td class="actions" style="width:10%">
		<?php if ($role['Role']['id'] != '1') { ?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $role['Role']['id']),array('class'=>'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $role['Role']['id']),array('class'=>'btn btn-xs btn-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $role['Role']['id']), array('class'=>'btn btn-xs btn-danger','confirm' => __('Are you sure you want to delete # %s?', $role['Role']['id']))); ?>
		<?php } ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
