<?php 
	echo $this->Form2->create('User', array('type'=>'file')); 
	echo $this->Form2->input('id');
?>
<div class="container content-padding">
	<div class="row well">
		<h3 class="text-center">Editar Perfil</h3><hr>
		<div class="col-sm-2">
			<!-- Nav tabs -->
			<ul class="nav nav-stacked" role="tablist">
				<li><a style="background: transparent;"> </a></li>
				<li role="presentation" class="active">
					<a href="#aboutme" aria-controls="aboutme" role="tab" data-toggle="tab">
						Sobre Mim
					</a>
				</li>
				<li role="presentation">
					<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
						Contato
					</a>
				</li>
				<li role="presentation">
					<a href="#newsletter" aria-controls="newsletter" role="tab" data-toggle="tab">
						Newsletter
					</a>
				</li>
				<li role="presentation">
					<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
						Configurações
					</a>
				</li>
				<li role="presentation">
					<a href="#ads" aria-controls="ads" role="tab" data-toggle="tab">
						Anúncios
					</a>
				</li>
				<li><a style="background: transparent; height: 160px"> </a></li>
			</ul>
		</div>
		<!-- Tab panes -->
		<div class="col-sm-6" style="min-height:300px;">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="aboutme">
					<div class="row">
						<div class="col-xs-12 col-sm-3">
							<?php
								echo $this->Html->image($this->data['Picture']['url'].$this->data['Picture']['name'],array('class'=>'img-circle img-responsive'));
							?>
						</div>
						<div class="col-xs-12 col-sm-8 col-sm-offset-1">
							<?php
								echo $this->Form2->input('Foto', array(
									'type'=>'file',
									'class'=>'form-control',
									'label'=>'Trocar Foto'));
								echo $this->Form2->button('Mudar Foto', array(
									'class'=>'btn btn-md btn-primary'
									));
								echo $this->Form2->button('Mudar Senha', array(
									'class'=>'btn btn-md btn-primary'
									));
							?>
						</div>
					</div><hr>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('username','Usuário:');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('username', array(
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('fullname','Nome Completo:');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('fullname', array(
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('pseudonimo','Pseudônimo:');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('pseudonimo', array(
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('gender','Gênero:');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('gender', array(
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('aboutme','Sobre Mim:');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('aboutme', array(
									'type'=>'textarea',
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('email','Email:');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('email', array(
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('address1','Endereço:');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('address1', array(
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('address2','Complemento:');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('address2', array(
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('city','Cidade');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('city', array(
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('state','Estado');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('state', array(
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('zipcode','Cod Postal');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('zipcode', array(
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<?php
								echo $this->Form2->label('cellphone','Celular');
							?>
						</div>
						<div class="col-xs-12 col-sm-8">
							<?php
								echo $this->Form2->input('cellphone', array(
									'class'=>'form-control',
									'label'=>false));
							?>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="newsletter">
					
				</div>
				<div role="tabpanel" class="tab-pane" id="settings">
				<?php
					if ($isAdmin) {
						echo $this->Form2->label('noads', 'Eliminar Ads?', array(
							'style'=>'width: 120px; padding:10px 0'
							));

						echo $this->Form2->checkbox('noads', array(
							'label'=>false
							));
						echo $this->Form2->input('Role', array(
							'class'=>'form-control pull-left',
							'style'=>'width: 250px',
							'label'=>array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
								)));
					}
				?>
				</div>
				<div role="tabpanel" class="tab-pane" id="ads">
					ADS
				</div>
			</div>
		</div>
	</div>
</div>