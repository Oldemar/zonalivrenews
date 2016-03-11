<div class="container content-padding">
	<div class="row ptop5 pbot5">
		<div class="col-xs-12 visible-xs">
		<?php
			echo $this->Form->input('catOptions', array(
				'empty'=>'Escolha uma Categoria',
				'class'=>'form-control',
				'id'=>'catOptions',
				'label'=>false
				));
		?>
		</div>
		<div class="col-sm-2 hidden-xs">
		<?php
			echo $this->Form->input('search', array(
				'type'=>'text',
				'class'=>'form-control search',
				'id'=>'search',
				'label'=>false
				));
		?>
		</div>
		<div class="col-sm-2 hidden-xs">
		</div>
		<div class="col-sm-2 hidden-xs">
		</div>
		<div class="col-sm-2 hidden-xs">
		</div>
		<div class="col-sm-2 hidden-xs">
		</div>
	</div>
	<div class="row font13" style="border-top:2px solid #222">
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 hidden-xs">

		</div>
		<div id="addclass" class="col-xs-12 col-sm-8 col-md-9 col-lg-10 pleft0" style="border-left:2px solid #222;">
			<div class="row ptop5 pbot5">
				<h4 class="text-center">Criar campanha</h4>
			</div>
			<div class="row ptop5 pbot5">
				<div class="col-xs-12 col-sm-8">
					<div class="showhide" id="notfeatured">
						<p class="font14 bold text-center" style="background: #DDD">Prévia - Veja aqui como ficar o seu anúncio</p>
						<div class="row pleft0 ptop10 pbot10" id="previewclassif" style="border: 1px solid #CCC; ">
							<div class="col-xs-9">
								<p class="font12">
									<a href="#" class='btn-link-gray bold font18' id="previewtitle"></a>
								</p>
								<p class="font12">
									<span id="previewbrand"></span>
									<span id="previewmodel"></span>
									<span id="previewyear"></span>
								</p>
								<p class="font12" id="previewdesc">
								</p>
								<p class="font12">
									<b>Preço: </b><span id="previewprice"></span>
								</p>
								<p class="font12">
									<b>Contato: </b><span id="previewcontact"></span>
									<b>Telefone: </b><span id="previewphone"></span>
								</p>
								<p class="pull-right font10">
									<em>
										Data: <?php echo date('Y-m-d H:i:s'); ?>
										criado por: <?php echo $objLoggedUser->getAttr('fullname'); ?>
									</em>
								</p>
							</div>
							<div class="col-xs-3">
								<?php 
									echo $this->Html->image('imghere.gif', array('class'=>'img-responsive')); 
								?>
							</div>
						</div>
					</div>
					<div class="showhide bg-warning" id="midFeatured" style="display: none">
						
					</div>
				</div>
				<div class="showhide col-sm-4" id="maxFeatured" style="display: none">
					<p class="font14 bold text-center" style="background: #DDD">Veja como fica o Destaque "Maximo"</p>
					<div>
						
					</div>
				</div>
			</div>
			<div class="row ptop20 pbot10">
				<div class="col-xs-12 col-sm-8">
					<?php echo $this->Form->create('Classified'); ?>
					<?php
						echo $this->Form->input('user_id',array(
							'type'=>'hidden',
							'value'=>$objLoggedUser->getID()
							));
					?>
					<div style="clear: both"></div>
					<?php
						echo $this->Form->label(null,'Destaque', array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
							));
						echo $this->Form->input('featured',array(
							'type'=>'hidden',
							'value'=>0
							));
					?>
					<table>
						<tr>
							<td class="pbot15">
							<?php 
								echo $this->Form->button('Sem destaque', array(
									'type'=>'button',
									'id'=>'btnNotFeatured',
									'class'=>'btn btn-xs btn-default'));
							?>
							</td>
						<td class="pleft10 pbot15">
							<?php 
								echo $this->Form->button('Minimo', array(
									'type'=>'button',
									'id'=>'btnMinFeatured',
									'class'=>'btn btn-xs btn-info'));
							?>
							</td>
						<td class="pleft10 pbot15">
							<?php 
								echo $this->Form->button('Medio', array(
									'type'=>'button',
									'id'=>'btnMedFeatured',
									'class'=>'btn btn-xs btn-warning'));
							?>
							</td>
						<td class="pleft10 pbot15">
							<?php 
								echo $this->Form->button('Maximo', array(
									'type'=>'button',
									'id'=>'btnMaxFeatured',
									'class'=>'btn btn-xs btn-success'));
							?>
							</td>
						</tr>
					</table>
					<div style="clear: both"></div>
					<?php
						echo $this->Form->input('category_id', array(
							'class'=>'form-control pull-left',
							'style'=>'width: 400px',
							'label'=>array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
								)));
					?>
					<div style="clear: both"></div>
					<?php
						echo $this->Form->input('brand', array(
							'class'=>'form-control pull-left',
							'style'=>'width: 400px',
							'label'=>array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
								)));
					?>
					<div style="clear: both"></div>
					<?php

						echo $this->Form->input('model', array(
							'class'=>'form-control pull-left',
							'style'=>'width: 400px',
							'label'=>array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
								)));
					?>
					<div style="clear: both"></div>
					<?php

						echo $this->Form->input('year', array(
							'class'=>'form-control pull-left',
							'style'=>'width: 400px',
							'label'=>array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
								)));
					?>
					<div style="clear: both"></div>
					<?php

						echo $this->Form->input('price', array(
							'class'=>'form-control pull-left',
							'style'=>'width: 400px',
							'label'=>array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
								)));
					?>
					<div style="clear: both"></div>
					<?php

						echo $this->Form->input('title', array(
							'class'=>'form-control pull-left',
							'style'=>'width: 400px',
							'label'=>array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
								)));
					?>
					<div style="clear: both"></div>
					<?php

						echo $this->Form->input('description', array(
							'type'=>'textarea',
							'limit'=>256,
							'class'=>'form-control pull-left',
							'style'=>'width: 400px',
							'label'=>array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
								)));
					?>
					<div style="clear: both"></div>
					<?php

						echo $this->Form->input('contact', array(
							'class'=>'form-control pull-left',
							'style'=>'width: 400px',
							'label'=>array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
								)));
					?>
					<div style="clear: both"></div>
					<?php

						echo $this->Form->input('phone', array(
							'class'=>'form-control pull-left',
							'style'=>'width: 400px',
							'label'=>array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
								)));
					?>
					<div style="clear: both"></div>
					<?php

						echo $this->Form->input('Adimages', array(
							'class'=>'form-control pull-left',
							'style'=>'width: 400px',
							'label'=>array(
								'class'=>'pull-left',
								'style'=>'width: 120px'
								)));
					?>
					<div style="clear: both"></div>
					<?php echo $this->Form->end(__('Submit')); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var bgAdColor = {0:'bg-default',1:'bg-success',2:'bg-info',3:'bg-warning'}; 
	$('#ClassifiedTitle').on('keyup blur', function(){
		$('#previewtitle').html($('#ClassifiedTitle').val());
	});
	$('#ClassifiedDescription').on('keyup blur', function(){
		$('#previewdesc').html($('#ClassifiedDescription').val());
	});
	$('#ClassifiedBrand').on('keyup blur', function(){
		$('#previewbrand').html($('#ClassifiedBrand').val() === '' ? '' :'<b>Marca: </b>'+$('#ClassifiedBrand').val());
	});
	$('#ClassifiedModel').on('keyup blur', function(){
		$('#previewmodel').html($('#ClassifiedModel').val() === '' ? '' :'<b>Modelo: </b>'+$('#ClassifiedModel').val());
	});
	$('#ClassifiedYear').on('blur', function(){
		$('#previewyear').html($('#ClassifiedYear').val() === '' ? '' :'<b>Ano: </b>'+$('#ClassifiedYear').val());
	});
	$('#ClassifiedPrice').on('keyup blur', function(){
		$('#previewprice').html(accounting.formatMoney($('#ClassifiedPrice').val()));
	});
	$('#ClassifiedContact').on('keyup blur', function(){
		$('#previewcontact').html($('#ClassifiedContact').val());
	});
	$('#ClassifiedPhone').on('keyup blur', function(){
		$('#previewphone').html($('#ClassifiedPhone').val());
	});
	$('#btnNotFeatured').click(function(){
		$('.showhide').hide();
		$('#notfeatured').show();
		$('#previewclassif').removeClass('bg-info');
		$('#previewclassif p.font14').removeClass('font14').addClass('font12');
		$('#ClassifiedFeatured').val('0');
	});
	$('#btnMinFeatured').click(function(){
		$('.showhide').hide();
		$('#notfeatured').show();
		$('#previewclassif').addClass('bg-info');
		$('#previewclassif p.font12').removeClass('font12').addClass('font14');
		$('#ClassifiedFeatured').val('1');
	});
	$('#btnMedFeatured').click(function(){
		$('.showhide').hide();
		$('#midFeatured').show();
		$('#ClassifiedFeatured').val('2');
	});
	$('#btnMaxFeatured').click(function(){
		$('.showhide').hide();
		$('#maxFeatured').show();
		$('#ClassifiedFeatured').val('3');
	});

</script>