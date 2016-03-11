<?php 
//	echo '<pre>'.print_r($opinions,true).'</pre>';
?>
<hr>
<h4>Opinião</h4>
<div class="row">
	<?php
	if (count($opinions) > 0) {
		foreach ($opinions as $key => $opinion) {
	?>
	<div class="col-xs-12 col-sm-6 ptop5 rbot5">
		<div class="box-opinion">
			<div class="row">
				<div class="col-xs-4 ptop10">
				<?php
					if ($opinion['Media'][0]['mediatype'] == 0)  
						echo $this->Html->image($opinion['Media'][0]['url'].$opinion['Media'][0]['source'],array('class'=>'img-responsive')); 
					if ($opinion['Media'][0]['mediatype'] != '0')
						echo $this->Html->media($opinion['Media'][0]['url'].$opinion['Media'][0]['source'],array('controls','width'=>'100%')); 
				?>
				</div>
				<div class="col-xs-8 ptop10">
					<p class="font16 bold">
						<?php
							echo $this->Html->link($opinion['News']['title'],array('controller'=>'news','action'=>$opinion['News']['gallery']?'gallery':'thenews',$opinion['News']['id']),array('class'=>'btn-link-gray font16'));
						?>
					</p>
					<p>
						<em>Por
						<?php
							echo $opinion['User']['fullname'];
						?>
						</em>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php
		} 
	}
	?>
</div>