<div class="container ptop10 pbot10">
	<div class="row">
		<div class="col-xs-12 col-sm-9 paddleft0">
		<?php echo $this->element('hotnews',array('param'=>$param)); ?>
		</div>
		<div class="col-xs-12 col-sm-3" id="ads_right">
		<?php echo $this->element('vert-ad',array('param'=>$vertads,'noads'=>$noads)); ?>
		</div>
	</div>
</div>
