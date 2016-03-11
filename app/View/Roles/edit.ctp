<?php echo $this->Form->create('Role'); ?>
<div class="container content-padding">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3 well">
			<h3 class="text-center">New Role</h3>
			<?php
				echo $this->Form->input('id');
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
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->button('Save', array(
					'type'=>'submit',
					'class'=>'pull-right btn btn-lg btn-primary'
					)); 
				echo $this->Form->end(); 
			?>
		</div>
	</div>
</div>