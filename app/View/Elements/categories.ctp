<div class="container content-padding">
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
		<?php
		foreach ($majorCat as $key => $cat) {
			if (!in_array($cat['Category']['id'],array('31'))) {
		?>
		<div class="col-xs-6 col-sm-4 text-center ptop10">
		<?php
			echo $this->Html->link($cat['Category']['name'],array('controller'=>'news','action'=>'catnews',$cat['Category']['id']),array('class'=>"btn btn-lg btn-black fixedsize50"));
			}
		?>
		</div>
		<?php
		}
	?>
	</div>
</div>