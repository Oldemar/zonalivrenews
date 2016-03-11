<div class="container">
	<div class="row bordertop ptop10">
		<div class="col-xs-6"><?php echo $this->element('sharenews'); ?></div>
		<div class="col-xs-6 ln_cat text-right"><?php echo $thenews['Category']['name']; ?><span class="ln_date"><?php echo CakeTime::format(strtotime($thenews['News']['created']), '%e/%b/%Y'); ?></span></div>
	</div>
</div>
<div class="container thenew-padding ">		
	<div class="row">
		<div class="col-sm-12 hidden-xs">
			<h1 class="font40">
				<?php
					echo $thenews['News']['title'];
				?>
			</h1>
		</div>
		<div class="col-xs-12 visible-xs">
			<h1 class="font30">
				<?php
					echo $thenews['News']['title'];
				?>
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-8" id="ln_media">
			<div class="row">
				<?php echo $this->element('showmedia',array('param'=>$thenews['Media'][0])) ?>
			</div>		
			<p class="font12">Por <span id="ln_author"><?php echo $thenews['User']['fullname']; ?></span></p>
			<div class="row">
				<?php echo $this->element('News/thenewcontent',array('param'=>$thenews)) ?>
			</div>
			<p id="ln_info">
				Source: 
				<span id="ln_source"><?php echo $thenews['News']['source']; ?></span>
			</p>
			<p><?php echo $thenews['News']['note']; ?></p>
		</div>
		<div class="col-xs-12 col-sm-4">
			<?php 
				if (!$logged_in || ( isset( $objLoggedUser ) && !$myPreferences[0]['Preference']['noads'] ) )
					echo $this->Html->image('ad001.jpeg',array('class'=>'img-responsive')) 
			?>
		</div>
	</div>
</div>
