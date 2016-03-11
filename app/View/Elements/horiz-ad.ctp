<?php
$rdm = rand(0,count($param)-1);
$imgRandom = $param[$rdm]['Ads']['source'];
?>
			<div class="row ptop20">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1">
						<?php echo $this->Html->image($imgRandom,array('class'=>'img-responsive center-block')) ?>
				</div>
			</div>
			<hr>