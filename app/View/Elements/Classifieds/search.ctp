<?php echo $this->Form->create('Search', array('class'=>'form-inline')); ?>
	<div class="row ptop5 pbot5 visible-xs">
		<div class="col-xs-12">
		<?php 
			echo $this->Form->input('search',array(
				'class'=>'form-control',
				'label'=>false,
				'placeholder'=>'Pesquisar por')); 
		?>
		</div>
		<div class="col-xs-12">
		<?php 
			echo $this->Form->select('categs',$catOptions,array(
				'empty'=>'Escolha uma categoria',
				'class'=>'form-control')); 
		?>
		</div>
		<div class="col-xs-12">
			<div class="form-group">
			<?php 
			echo $this->Form->input('min',array(
				'class'=>'form-control',
				'placeholder'=>'Min.'));
			?>
			</div>
			<div class="form-group">				
			<?php
			echo $this->Form->input('max',array(
				'class'=>'form-control',
				'placeholder'=>'Max.')); 
			?>
			</div>
		</div>
	</div>
<?php echo $this->Form->end(); ?>
