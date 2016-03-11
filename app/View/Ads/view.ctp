<div class="ads view">
<h2><?php echo __('Ad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ad['User']['username'], array('controller' => 'users', 'action' => 'view', $ad['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ad['Category']['name'], array('controller' => 'categories', 'action' => 'view', $ad['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ad'), array('action' => 'edit', $ad['Ad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ad'), array('action' => 'delete', $ad['Ad']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ad['Ad']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adimages'), array('controller' => 'adimages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adimage'), array('controller' => 'adimages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Adimages'); ?></h3>
	<?php if (!empty($ad['Adimage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Ad Id'); ?></th>
		<th><?php echo __('Mediatype'); ?></th>
		<th><?php echo __('Source'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ad['Adimage'] as $adimage): ?>
		<tr>
			<td><?php echo $adimage['id']; ?></td>
			<td><?php echo $adimage['user_id']; ?></td>
			<td><?php echo $adimage['ad_id']; ?></td>
			<td><?php echo $adimage['mediatype']; ?></td>
			<td><?php echo $adimage['source']; ?></td>
			<td><?php echo $adimage['active']; ?></td>
			<td><?php echo $adimage['created']; ?></td>
			<td><?php echo $adimage['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'adimages', 'action' => 'view', $adimage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'adimages', 'action' => 'edit', $adimage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'adimages', 'action' => 'delete', $adimage['id']), array('confirm' => __('Are you sure you want to delete # %s?', $adimage['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Adimage'), array('controller' => 'adimages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
