<div class="ads form">
<?php echo $this->Form->create('Ad'); ?>
	<fieldset>
		<legend><?php echo __('Add Ad'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('title');
		echo $this->Form->input('contact');
		echo $this->Form->input('phone');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adimages'), array('controller' => 'adimages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adimage'), array('controller' => 'adimages', 'action' => 'add')); ?> </li>
	</ul>
</div>
