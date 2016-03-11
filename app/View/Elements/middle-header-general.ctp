			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-2 mid-header-padding hidden-xs">
							<?php echo CakeTime::format(strtotime($today), '%b %e, %Y'); ?>							
						</div>
						<div class="col-sm-7">
						 	<ul class="nav-bar">
						    	<li class="active">
						    		<?php echo $this->Html->link('<span class="glyphicon glyphicon-home" aria-hidden="true"></span>','/', array('escape'=>false)); ?>
						    	</li>
						    	<li class="active">
						    		<?php echo $this->Html->link($this->Html->image('tvzonalivre.png',array('width'=>'21')),array('controller'=>'pages','action'=>'tvzl'), array('escape'=>false)); ?>
						    	</li>
						    	<li>
						    		<?php
						    			echo $this->Html->link('Seções',array('controller'=>'pages','action'=>'categories'));
						    		?>
						    	</li>
						    	<li class="active">
						    		<?php echo $this->Html->link('Classificados',array('controller'=>'pages','action'=>'classifieds'), array('escape'=>false)); ?>
						    	</li>
						    	<?php 
						    		if ($logged_in) { 
						    	?>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
									<ul class="dropdown-menu">
									    <?php 
									    	if ($canPostOpinion) {
									    ?>
								    	<li>
								    		<?php 
								    		echo $this->Html->link('Opiniões',array('controller'=>'news','action'=>'index','33')); 
								    		?>
								    	</li>
								    	<li>
								    		<?php 
								    		echo $this->Html->link('Medias',array('controller'=>'media','action'=>'index',$objLoggedUser->getID())); 
								    		?>
								    	</li>
									    <?php
								    		}
									    	if ($isAdmin || $canPostNews) {
									    ?>
								    	<li>
								    		<?php 
								    			echo $this->Html->link('Materias',array('controller'=>'news','action'=>'index')); 
								    		?>
								    	</li>
								    	<li>
								    		<?php 
								    			echo $this->Html->link('Medias',array('controller'=>'media','action'=>'index')); 
								    		}
									    	if ($isAdmin) {
									    ?>
								    	<li>
								    		<?php 
								    			echo $this->Html->link('Seções',array('controller'=>'categories','action'=>'index')); 
								    		}
								    		?>
								    	</li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Anúncios</a></li>
									</ul>
								</li>
								<?php
									}
									if ($isAdmin) { 
								?>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Support <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li>
								    		<?php 
								    			echo $this->Html->link('Roles',array('controller'=>'roles','action'=>'index')); 
								    		?>
										</li>
										<li>
								    		<?php 
								    			echo $this->Html->link('Users',array('controller'=>'users','action'=>'index')); 
								    		?>
										</li>
										<li role="separator" class="divider"></li>
										<li><a href="#" id="debug">Debug</a></li>
									</ul>
								</li>
							    <?php		
							    	}
							    ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
