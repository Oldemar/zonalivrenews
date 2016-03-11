<?php echo $this->Form->create('User', array('type'=>'file')); ?>
<div class="container content-padding">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3 well">
			<h3 class="text-center">Editar Perfil</h3><hr>
			<?php
				echo $this->Form->label(null, 'Foto', array(
					'style'=>'width: 120px; padding:10px 0'
					));

				echo $this->Html->image($this->data['Picture']['url'].$this->data['Picture']['name'],array('width'=>'60','class'=>'img-circle'));
				echo $this->Html->link('Trocar Foto','#',array('class'=>'btn btn-xs btn-black'))
			?>
			<div style="clear: both"></div><hr>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('username', array(
					'class'=>'form-control pull-left',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->input('fullname', array(
					'class'=>'form-control pull-left',
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
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			?>
			<div style="clear: both"></div>
			<?php
				if ($isAdmin) {
					echo $this->Form->label('noads', 'Eliminar Ads?', array(
						'style'=>'width: 120px; padding:10px 0'
						));

					echo $this->Form->checkbox('noads', array(
						'label'=>false
						));
					echo $this->Form->input('Role', array(
						'class'=>'form-control pull-left',
						'style'=>'width: 250px',
						'label'=>array(
							'class'=>'pull-left',
							'style'=>'width: 120px'
							)));
				}
			?>
			<div style="clear: both"></div>
			<?php
				echo $this->Form->button('Save', array(
					'type'=>'submit','class'=>'pull-right btn btn-lg btn-primary')); 
				echo $this->Form->end(); 
			?>
		</div>
	</div>
</div>