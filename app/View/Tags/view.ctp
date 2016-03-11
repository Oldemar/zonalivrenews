<div class="tags view">
<h2><?php echo __('Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tag'), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tag'), array('action' => 'delete', $tag['Tag']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tag['Tag']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classifieds'), array('controller' => 'classifieds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classified'), array('controller' => 'classifieds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Classifieds'); ?></h3>
	<?php if (!empty($tag['Classified'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Brand Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tag['Classified'] as $classified): ?>
		<tr>
			<td><?php echo $classified['id']; ?></td>
			<td><?php echo $classified['user_id']; ?></td>
			<td><?php echo $classified['category_id']; ?></td>
			<td><?php echo $classified['brand_id']; ?></td>
			<td><?php echo $classified['year']; ?></td>
			<td><?php echo $classified['model']; ?></td>
			<td><?php echo $classified['price']; ?></td>
			<td><?php echo $classified['contact']; ?></td>
			<td><?php echo $classified['phone']; ?></td>
			<td><?php echo $classified['description']; ?></td>
			<td><?php echo $classified['created']; ?></td>
			<td><?php echo $classified['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'classifieds', 'action' => 'view', $classified['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'classifieds', 'action' => 'edit', $classified['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'classifieds', 'action' => 'delete', $classified['id']), array('confirm' => __('Are you sure you want to delete # %s?', $classified['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Classified'), array('controller' => 'classifieds', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related News'); ?></h3>
	<?php if (!empty($tag['News'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Subtitle'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Pseudonimo'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Source'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Gallery'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Revised'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tag['News'] as $news): ?>
		<tr>
			<td><?php echo $news['id']; ?></td>
			<td><?php echo $news['title']; ?></td>
			<td><?php echo $news['subtitle']; ?></td>
			<td><?php echo $news['content']; ?></td>
			<td><?php echo $news['user_id']; ?></td>
			<td><?php echo $news['pseudonimo']; ?></td>
			<td><?php echo $news['note']; ?></td>
			<td><?php echo $news['source']; ?></td>
			<td><?php echo $news['category_id']; ?></td>
			<td><?php echo $news['gallery']; ?></td>
			<td><?php echo $news['active']; ?></td>
			<td><?php echo $news['revised']; ?></td>
			<td><?php echo $news['created']; ?></td>
			<td><?php echo $news['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'news', 'action' => 'view', $news['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'news', 'action' => 'edit', $news['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'news', 'action' => 'delete', $news['id']), array('confirm' => __('Are you sure you want to delete # %s?', $news['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
