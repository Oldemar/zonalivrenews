			<div class="row">
				<div class="col-xs-12 col-sm-8 paddleft0">
				<?php
				for ($key=0; $key < 5; $key++) { 
					if (!isset($param[$key]['News']['id'])) break;
				?>
					<div class="row<?php echo $key==0 ? ' bordertop' : '' ; ?>">
						<div class="col-xs-4 col-sm-4 col-md-3 padtopbot15">
							<p>
							<?php
								if ($param[$key]['Media'][0]['mediatype'] == 0)  
									echo $this->Html->image($param[$key]['Media'][0]['url'].$param[$key]['Media'][0]['source'],array('class'=>'img-responsive'));
							 ?>
							 </p>
						</div>
						<div class="col-xs-8 col-sm-8 col-md-9 paddleft0 padtopbot15">
							<p id="ln_cat">
							<?php 
								echo $this->Html->link($param[$key]['Category']['name'],array('controller'=>'news','action'=>'subcatnews',$param[$key]['Category']['id']),array('class'=>'btn-link-red')); 
							?> 
							<span id="ln_date"><?php echo CakeTime::format(strtotime($param[$key]['News']['created']), '%b %e, %Y'); ?></span>
							</p>
							<h4>
								<?php
				 					echo $this->Html->link($param[$key]['News']['title'],array('controller'=>'news','action'=>$param[$key]['News']['gallery']?'gallery':'thenews',$param[$key]['News']['id']),array('class'=>'btn-link-gray'));
				 				?>
							</h4>
							<p>
								<?php if ($param[$key]['News']['gallery']) {
				 					echo $this->Html->link('<span class="glyphicon glyphicon-camera" aria-hidden="true"></span> - Galeria',array('controller'=>'news','action'=>'gallery',$param[$key]['News']['id']),array('class'=>'btn-link-gray','escape'=>false));
								
								} ?>
							</p>
						</div>
					</div>					
				<?php
					}
				?>
				</div>
				<div class="col-xs-12 col-sm-4">
					<?php 
					for ($key=5; $key < count($param); $key++) { 
						if (!isset($param[$key]['News']['id'])) break;
					?>
					<div class="row bordertop hidden-xs">
						<div class="col-sm-12 paddleft0 ptop5">
							<p id="ln_cat">
							<?php 
								echo $this->Html->link($param[$key]['Category']['name'],array('controller'=>'news','action'=>'subcatnews',$param[$key]['Category']['id']),array('class'=>'btn-link-red')); 
							?> 
							<span id="ln_date">
							<?php 
								echo CakeTime::format(strtotime($param[$key]['News']['created']), '%b %e, %Y'); 
							?>
							</span>
							</p>
							<p class="font12 mbot0">
							<?php
				 				echo $this->Html->link($param[$key]['News']['title'],array('controller'=>'news','action'=>$param[$key]['News']['gallery']?'gallery':'thenews',$param[$key]['News']['id']),array('class'=>'btn-link-gray'));
				 			?>
							</p>
							<p class="font12 mbot10">
								<?php 
								if ($param[$key]['News']['gallery']) {
				 					echo $this->Html->link('<span class="glyphicon glyphicon-camera" aria-hidden="true"></span> - Galeria',array('controller'=>'news','action'=>'gallery',$param[$key]['News']['id']),array('class'=>'btn-link-gray','escape'=>false));
								
								} ?>
							</p>
						</div>
					</div>
					<?php
					} 
					?>
					<div class="row bordertop visible-xs ptop5">
					<?php
 					for ($key=5; $key < count($param); $key++) { 
						if (!isset($param[$key]['News']['id'])) break;
					?>
						<div class="visible-xs col-xs-6 paddleft0">
							<p id="ln_cat">
							<?php 
								echo $this->Html->link($param[$key]['Category']['name'],array('controller'=>'news','action'=>'subcatnews',$param[$key]['Category']['id']),array('class'=>'btn-link-red')); 
							?> 
							<span id="ln_date">
							<?php 
								echo CakeTime::format(strtotime($param[$key]['News']['created']), '%b %e, %Y'); 
							?>
							</span>
							</p>
							<p class="font12 mbot5">
							<?php
				 				echo $this->Html->link($param[$key]['News']['title'],array('controller'=>'news','action'=>$lastNews['News']['gallery']?'gallery':'thenews',$param[$key]['News']['id']),array('class'=>'btn-link-gray'));
				 			?>
							</p>
							<p class="font12 mbot10">
								<?php if ($param[$key]['News']['gallery']) {
				 					echo $this->Html->link('<span class="glyphicon glyphicon-camera" aria-hidden="true"></span> - Galeria',array('controller'=>'news','action'=>'gallery',$param[$key]['News']['id']),array('class'=>'btn-link-gray','escape'=>false));
								
								} ?>
							</p>
						</div>
					<?php 
					} 
					?>
					</div>
				</div>
			</div>
