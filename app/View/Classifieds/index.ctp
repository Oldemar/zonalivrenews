<div class="container content-paddind">
	<h2><?php echo __('Classifieds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('brand_id'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($classifieds as $classified): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($classified['User']['username'], array('controller' => 'users', 'action' => 'view', $classified['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($classified['Category']['name'], array('controller' => 'categories', 'action' => 'view', $classified['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($classified['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $classified['Brand']['id'])); ?>
		</td>
		<td><?php echo h($classified['Classified']['year']); ?>&nbsp;</td>
		<td><?php echo h($classified['Classified']['model']); ?>&nbsp;</td>
		<td><?php echo h($classified['Classified']['price']); ?>&nbsp;</td>
		<td><?php echo h($classified['Classified']['contact']); ?>&nbsp;</td>
		<td><?php echo h($classified['Classified']['phone']); ?>&nbsp;</td>
		<td><?php echo h($classified['Classified']['description']); ?>&nbsp;</td>
		<td><?php echo h($classified['Classified']['created']); ?>&nbsp;</td>
		<td><?php echo h($classified['Classified']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $classified['Classified']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $classified['Classified']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $classified['Classified']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $classified['Classified']['id']))); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Classified'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media'), array('controller' => 'media', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media'), array('controller' => 'media', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
