<div class="adimages index">
	<h2><?php echo __('Adimages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mediatype'); ?></th>
			<th><?php echo $this->Paginator->sort('source'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($adimages as $adimage): ?>
	<tr>
		<td><?php echo h($adimage['Adimage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($adimage['User']['username'], array('controller' => 'users', 'action' => 'view', $adimage['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($adimage['Ad']['title'], array('controller' => 'ads', 'action' => 'view', $adimage['Ad']['id'])); ?>
		</td>
		<td><?php echo h($adimage['Adimage']['mediatype']); ?>&nbsp;</td>
		<td><?php echo h($adimage['Adimage']['source']); ?>&nbsp;</td>
		<td><?php echo h($adimage['Adimage']['active']); ?>&nbsp;</td>
		<td><?php echo h($adimage['Adimage']['created']); ?>&nbsp;</td>
		<td><?php echo h($adimage['Adimage']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $adimage['Adimage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $adimage['Adimage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $adimage['Adimage']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $adimage['Adimage']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Adimage'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
	</ul>
</div>
