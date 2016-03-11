<div class="container content-padding">
	<div class="col-xs-12 col-sm-6 col-sm-offset-3 well">
		<?php echo $this->Form->create('Category', array('role'=>'form')); ?>
		<h3><?php echo __('Add Category'); ?></h3>
		<?php
			echo $this->Form->input('parent_id', array(
				'empty'=>'',
				'class'=>'form-control pull-left',
				'style'=>'width: 250px',
				'label'=>array(
					'class'=>'pull-left',
					'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
			echo $this->Form->input('name', array(
				'class'=>'form-control pull-left',
				'style'=>'width: 250px',
				'label'=>array(
					'class'=>'pull-left',
					'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
				echo $this->Form->input('description', array(
					'type'=>'textarea',
					'class'=>'form-control pull-left',
					'style'=>'width: 250px;min-height:200px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
			echo $this->Form->label('active', 'Active?', array(
				'style'=>'width: 120px; padding:10px 0'
				));

			echo $this->Form->checkbox('active', array(
				'label'=>false
				));
		?>
		<div style="clear: both"></div>
		<?php
			echo $this->Form->button('Salvar', array(
				'type'=>'submit','class'=>'pull-right btn btn-lg btn-primary')); 
			echo $this->Form->end(); 
		?>
		<div style="clear: both"></div>
	</div>
</div>