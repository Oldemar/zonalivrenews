<div class="container content-padding">
	<div class="col-xs-4 col-sm-3 col-md-2">
		<h2><?php echo __('Users'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('fullname'); ?></th>
			<th><?php echo $this->Paginator->sort('pseudonimo'); ?></th>
			<th><?php echo $this->Paginator->sort('cellphone'); ?></th>
			<th><?php echo $this->Paginator->sort('online'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('noads'); ?></th>
			<th><?php echo $this->Paginator->sort('lastlogin'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['pseudonimo']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['cellphone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['online']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['active']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['noads']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['lastlogin']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']),array('class'=>'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']),array('class'=>'btn btn-xs btn-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class'=>'btn btn-xs btn-danger','confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
