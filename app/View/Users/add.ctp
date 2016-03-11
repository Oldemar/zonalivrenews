<?php echo $this->Form->create('User', array('type'=>'file')); ?>
<div class="container content-padding">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3 well">
			<?php echo $this->Session->flash('flash',array('element'=>'Flash/login')); ?>
			<h3 class="text-center">Subscrever</h3><hr>
			<?php
				echo $this->Form->input('Foto', array(
					'type'=>'file',
					'class'=>'form-control pull-left',
					'style'=>'width: 250px',
					'required'=>'required',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div><hr>
			<?php
				echo $this->Form->input('username', array(
					'class'=>'form-control pull-left',
					'style'=>'width: 250px',
					'required'=>'required',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->label('password','Senha',array(
					'class'=>'pull-left',
					'style'=>'width: 120px'
					));
				echo $this->Form->input('password', array(
					'type'=>'password',
					'required'=>'required',
					'class'=>'form-control pull-left',
					'style'=>'width: 250px',
					'label'=>false
					));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->label('senha','Redigite',array(
					'class'=>'pull-left',
					'style'=>'width: 120px'
					));
				echo $this->Form->input('senha', array(
					'type'=>'password',
					'required'=>'required',
					'class'=>'form-control pull-left',
					'style'=>'width: 250px',
					'label'=>false
				));
			?>
			<div style="clear: both"></div><hr>
			<?php
				echo $this->Form->input('fullname', array(
					'class'=>'form-control pull-left',
					'required'=>'required',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->input('pseudonimo', array(
					'class'=>'form-control pull-left',
					'required'=>'required',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->input('email', array(
					'class'=>'form-control pull-left',
					'required'=>'required',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->input('aboutme', array(
					'type'=>'textarea',
					'class'=>'form-control pull-left',
					'required'=>'required',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->input('address1', array(
					'class'=>'form-control pull-left',
					'required'=>'required',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->input('address2', array(
					'class'=>'form-control pull-left',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->input('city', array(
					'class'=>'form-control pull-left',
					'required'=>'required',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->input('state', array(
					'class'=>'form-control pull-left',
					'required'=>'required',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->input('zipcode', array(
					'class'=>'form-control pull-left',
					'required'=>'required',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->input('cellphone', array(
					'class'=>'form-control pull-left',
					'required'=>'required',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->input('Role', array(
						'type'=>'hidden',
						'value'=>9
						));
				echo $this->Form->button('Save', array(
					'type'=>'submit','class'=>'pull-right btn btn-lg btn-primary')); 
				echo $this->Form->end(); 
			?>
		</div>
	</div>
</div>