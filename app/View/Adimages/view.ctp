<div class="adimages view">
<h2><?php echo __('Adimage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($adimage['Adimage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($adimage['User']['username'], array('controller' => 'users', 'action' => 'view', $adimage['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($adimage['Ad']['title'], array('controller' => 'ads', 'action' => 'view', $adimage['Ad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mediatype'); ?></dt>
		<dd>
			<?php echo h($adimage['Adimage']['mediatype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Source'); ?></dt>
		<dd>
			<?php echo h($adimage['Adimage']['source']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($adimage['Adimage']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($adimage['Adimage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($adimage['Adimage']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Adimage'), array('action' => 'edit', $adimage['Adimage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Adimage'), array('action' => 'delete', $adimage['Adimage']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $adimage['Adimage']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Adimages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adimage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
	</ul>
</div>
