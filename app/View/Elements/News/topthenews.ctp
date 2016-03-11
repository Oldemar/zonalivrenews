<div class="container">
	<div class="row ptop10">
		<div class="col-xs-6"><?php echo $this->element('sharenews'); ?></div>
		<div class="col-xs-6 ln_cat text-right"><?php echo $param['Category']['name']; ?><span class="ln_date"><?php echo CakeTime::format(strtotime($param['News']['created']), '%e/%b/%Y'); ?></span></div>
	</div>
	<div class="row">
		<div class="col-sm-12 hidden-xs">
			<h1 class="font40">
				<?php
					echo $param['News']['title'];
				?>
			</h1>
		</div>
		<div class="col-xs-12 visible-xs">
			<h1 class="font30">
				<?php
					echo $param['News']['title'];
				?>
			</h1>
		</div>
	</div>
</div>
