<div class="container content-padding">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 text-center" id="ln_media">
			<?php echo $this->element('showmedia',array('param'=>$param['Media'][0])) ?>
			<p id="ln_media_desc"></p>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8" id="ln_composition">
			<p id="ln_cat">
				<?php 
					echo $this->Html->link($param['Category']['name'],array('controller'=>'news','action'=>'catnews',$param['Category']['id']),array('class'=>'btn-link-red')); 
				?> 
				<span id="ln_date"><?php echo CakeTime::format(strtotime($param['News']['created']), '%b %e, %Y'); ?></span></p>
			<p id="ln_title">
				<?php
					echo $this->Html->link($param['News']['title'],array('controller'=>'news','action'=>$param['News']['gallery']?'gallery':'thenews',$param['News']['id']),array('class'=>'btn-link-gray font30'));
				?>
			</p>
			<p class="font12">Por <span id="ln_author"><?php echo $param['User']['fullname']; ?></span></p>
			<p id="font16">
				<?php echo $param['News']['subtitle']; ?>
			</p>
			<p>
				<?php if ($param['News']['gallery']) {
 					echo $this->Html->link('<span class="glyphicon glyphicon-camera" aria-hidden="true"></span>',array('controller'=>'news','action'=>'gallery',$param['News']['id']),array('class'=>'btn-link-gray','escape'=>false));
				
				} ?>
			</p>
			<p id="ln_info">
				Source: 
				<span id="ln_source"><?php echo $param['News']['source']; ?></span>
			</p>
		</div>
	</div>
</div>
