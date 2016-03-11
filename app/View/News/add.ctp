<div class="container content-padding">

	<div class="col-xs-12 col-sm-8 col-sm-offset-2 well">
        <?php echo $this->Session->flash('flash',array('element'=>'Flash/error')); ?>
		<?php echo $this->Form->create('News', array('type'=>'file','role'=>'form')); ?>
		<h3><?php echo __('Add News'); ?></h3>
		<?php
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
			}
			if ($canPostOpinion || $canPostNews) {
				echo $this->Form->input('user_id', array(
					'type'=>'hidden',
					'value'=>$objLoggedUser->getID()
					));
			}
			if ($canPostOpinion) {
				echo $this->Form->input('category_id', array(
					'type'=>'hidden',
					'value'=>'33'
					));
			} else {
				echo $this->Form->input('category_id', array(
					'class'=>'form-control pull-left',
					'style'=>'width: 250px',
					'label'=>array(
						'class'=>'pull-left',
						'style'=>'width: 120px'
						)));
			}
		?>
		<div style="clear: both"></div>
		<div id="divGallery" style="display: none;">
		<?php
			if (!$canPostOpinion) {
				echo $this->Form->label('gallery', 'Gallery?', array(
					'style'=>'width: 120px; padding:10px 0'
					));

				echo $this->Form->checkbox('gallery', array(
					'label'=>false
					));
			}
		?>
		</div>
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
				'style'=>'width: 550px',
				'label'=>array(
					'class'=>'pull-left',
					'style'=>'width: 120px'
					)));
		?>
		<div style="clear: both"></div>
		<?php
			echo $this->Form->button('Save', array(
				'type'=>'submit','class'=>'pull-right btn btn-lg btn-primary'));
			if($canPostOpinion) {
				echo $this->Html->link('Lista', array(
					'action'=>'index','33'),array('class'=>'pull-left btn btn-lg btn-default'));
			}
			echo $this->Form->end(); 
		?>
		<div style="clear: both"></div>
	</div>
</div>
<script type="text/javascript">
	$('#NewsCategoryId').change(function(){
		var arrCat = ['12','13','18','19','24','34'];
		if ( $.inArray( $('#NewsCategoryId option:selected').val(),arrCat ) !== -1 ) {
			$('#divGallery').show();
		} else {
			$('#divGallery').hide();
		}
	});
</script>