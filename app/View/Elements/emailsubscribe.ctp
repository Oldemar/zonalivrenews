<div class="row form-newsletter">
	<?php
		echo $this->Form->create('newsletter');
		echo $this->Form->input('email', array(
			'type'=>'email',
			'required'=>'required',
			'placeholder'=>'Digite seu email',
			'class'=>'form-control'
			));
		echo $this->Form->button('Save',array(
			'type'=>'button',
			'class'=>'btn btn-sm btn-black',
			'id'=>'btnSaveSubscription'
			));
		echo $this->Form->end();
	?>
</div>