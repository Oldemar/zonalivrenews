<div class="container content-padding">
	<div class="row">
		<div class="col-xs-12 col-sm-5 col-sm-offset-1 text-center placead">
		<h4>Lista de Classificados</h4>
			<?php
				echo $this->Html->link(
					$this->Html->image(
						'classified-ads.jpeg', 
						array(
							'class'=>'img-responsive center-block'
							)), 
					array(
						'controller'=>'classifieds',
						'action'=>'listads'),
					array(
						'escape'=>false)
				);
			?>
		</div>
		<div class="col-xs-12 col-sm-5 text-center placead">
		<h4>Anuncie conosco</h4>
			<?php
				echo $this->Html->link(
					$this->Html->image(
						'anuncie1.png', 
						array(
							'class'=>'img-responsive center-block'
							)), 
					array(
						'controller'=>'ads',
						'action'=>'placead'),
					array(
						'escape'=>false)
				);
			?>
		</div>
	</div>
</div>