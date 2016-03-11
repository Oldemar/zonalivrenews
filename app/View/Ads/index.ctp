<div class="ads index">
	<h2><?php echo __('Ads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ads as $ad): ?>
	<tr>
		<td><?php echo h($ad['Ad']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ad['User']['username'], array('controller' => 'users', 'action' => 'view', $ad['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ad['Category']['name'], array('controller' => 'categories', 'action' => 'view', $ad['Category']['id'])); ?>
		</td>
		<td><?php echo h($ad['Ad']['title']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['contact']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['phone']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['description']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['created']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ad['Ad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ad['Ad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ad['Ad']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ad['Ad']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Ad'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adimages'), array('controller' => 'adimages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adimage'), array('controller' => 'adimages', 'action' => 'add')); ?> </li>
	</ul>
</div>
