<div class="container">
	<?php
		echo $this->element('News/topthenews',array('param'=>$thenews));
	?>
</div>
<div class="container">		
	<div class="row">
		<div class="col-xs-12 col-sm-8" id="ln_media">
		<?php
			echo $this->element('News/middlethenews',array('param'=>$thenews));
		?>
		</div>
		<div class="col-xs-12 col-sm-4">
		<?php
			echo $this->element('vert-ad',array('param'=>$vertads,'noads'=>$thenews['User']['noads']));
		?>
		</div>
	</div>
</div>
