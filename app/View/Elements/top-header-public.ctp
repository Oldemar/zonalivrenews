			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 top-header-padding paddleft0">
							<div class="col-xs-5 col-sm-6 paddleft0">
								<a href="#" class="btn btn-link-gray btn-md">
									<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
									<span class="hidden-xs" style="padding: 0 6px">Seções</span>
								</a>
							</div>
							<div class="col-xs-5 col-sm-6 paddleft0">
								<a href="#" class="btn btn-link-gray btn-md">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									<span class="hidden-xs" style="padding: 0 6px">Pesquisar</span>
								</a>
							</div>
						</div>
						<div class="col-xs-8 col-sm-5 col-md-6 col-lg-6 text-center">
							<div class="col-md-8 col-md-offset-2">
								<?php echo $this->Html->image('zonalivre.png', array('class'=>"img-responsive")); ?>
							</div>
						</div>
						<div class="col-sm-4 col-md-3 col-lg-3 hidden-xs top-header-padding">
							<div class="col-sm-6">
								<?php 
									if (!$logged_in) { 
										echo $this->Html->link('Subscrever',array('controller'=>'users','action'=>'add'),array('class'=>'btn btn-default btn-md'));
								 	} 
								 ?>
							</div>
							<div class="col-xs-6">
								<?php
									if (!$logged_in)
										echo $this->Html->link('Acessar',array('controller'=>'users','action'=>'login'),array('class'=>'btn btn-black btn-md'));
									else {
								?>
								<div class="dropdown">
									<button class="btn btn-black dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										<?php echo $objLoggedUser->getAttr('username'); ?>
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li>
										<?php
											echo $this->Html->link('Perfil',array('controller'=>'users','action'=>'profile',$objLoggedUser->getID()));
										?>
										</li>
										<li role="separator" class="divider"></li>
										<li>
										<?php
											echo $this->Html->link('Informar Problema',array('controller'=>'users','action'=>'bugreport'));
										?>
										</li>
										<li role="separator" class="divider"></li>
										<li>
										<?php
											echo $this->Html->link('Sair',array('controller'=>'users','action'=>'logout'));
										?>
										</li>
									</ul>
								</div>
								<?php } ?>
							</div>
						</div>
						<div class="col-xs-2 visible-xs top-header-padding">
							<button type="button" class="btn btn-black btn-md">
								<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
						</div>
					</div>
				</div>
			</div>
