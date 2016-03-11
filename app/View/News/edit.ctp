<div class="container content-padding">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2 well">
		<?php echo $this->Form->create('News', array('type'=>'file','role'=>'form')); ?>
		<h3><?php echo __('Edit News'); ?></h3>
		<?php
			echo $this->Form->input('id');
			if ($isAdmin) {
				echo $this->Form->input('user_id', array(
					'class'=>'form-control pull-left',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
		?>
		<div style="clear: both"></div>
		<?php
			} elseif ($canPostNews) {
				echo $this->Form->input('user_id', array(
					'type'=>'hidden',
					'value'=>$objLoggedUser->getID()
					));
			}
			echo $this->Form->input('category_id', array(
				'class'=>'form-control pull-left',
				'style'=>'width: 250px',
				'label'=>array(
					'class'=>'pull-left',
					'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
			echo $this->Form->input('File', array(
				'type'=>'file',
				'multiple'=>'multiple',
				'class'=>'form-control pull-left',
				'style'=>'width: 550px',
				'label'=>array(
					'class'=>'pull-left',
					'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
			echo $this->Form->label('gallery', 'Gallery?', array(
				'style'=>'width: 120px; padding:10px 0'
				));

			echo $this->Form->checkbox('gallery', array(
				'label'=>false
				));
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
			echo $this->Form->label('revised', 'Revised?', array(
				'style'=>'width: 120px; padding:10px 0'
				));

			echo $this->Form->checkbox('revised', array(
				'label'=>false
				));
		?>
		<div style="clear: both"></div>
		<?php
			echo $this->Form->input('title', array(
				'class'=>'form-control pull-left',
				'style'=>'width: 550px',
				'label'=>array(
					'class'=>'pull-left',
					'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
				echo $this->Form->input('subtitle', array(
					'type'=>'textarea',
					'class'=>'form-control pull-left',
					'style'=>'width: 550px;min-height:70px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
				echo $this->Form->input('content', array(
					'type'=>'textarea',
					'class'=>'form-control pull-left',
					'style'=>'width: 550px;min-height:400px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
			echo $this->Form->input('source', array(
				'class'=>'form-control pull-left',
				'style'=>'width: 550px',
				'label'=>array(
					'class'=>'pull-left',
					'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
				echo $this->Form->input('note', array(
					'type'=>'textarea',
					'class'=>'form-control pull-left',
					'style'=>'width: 550px;min-height:70px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
			echo $this->Form->input('Media', array(
				'class'=>'form-control pull-left',
				'style'=>'width: 250px',
				'label'=>array(
					'class'=>'pull-left',
					'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
			echo $this->Form->button('Save', array(
				'type'=>'submit','class'=>'pull-right btn btn-lg btn-primary')); 
			echo $this->Form->end(); 
		?>
		<div style="clear: both"></div>
	</div>
</div>