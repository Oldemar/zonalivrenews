<div class="container">	
	<div class="categories view">
	<h2><?php echo __('Category'); ?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($category['Category']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Parent Category'); ?></dt>
			<dd>
				<?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Lft'); ?></dt>
			<dd>
				<?php echo h($category['Category']['lft']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Rght'); ?></dt>
			<dd>
				<?php echo h($category['Category']['rght']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($category['Category']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Description'); ?></dt>
			<dd>
				<?php echo h($category['Category']['description']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Active'); ?></dt>
			<dd>
				<?php echo h($category['Category']['active']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($category['Category']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($category['Category']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
</div>