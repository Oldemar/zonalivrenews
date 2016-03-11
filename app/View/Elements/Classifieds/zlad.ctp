						<div class="row pleft0 ptop10 pbot10" id="previewclassif" style="border-bottom: 1px solid #CCC; ">
							<div class="col-xs-9">
								<p class="font12">
									<a href="#" class='btn-link-gray bold font18' id="previewtitle">Título do classificado gratuito</a>
								</p>
								<p class="font12">
									<span id="previewbrand"><b>Marca:</b> Voce escolhe</span>
									<span id="previewmodel"><b>Modelo:</b> Isso também</span>
									<span id="previewyear"><b>Ano:</b> Entre 1900 e o corrente</span>
								</p>
								<p class="font12" id="previewdesc">
								Aqui voce poderá inserir um texto com até 256 caracteres.(O aplicativo não permite a incusão de nenhuma palavra considerada inadequada.)
								</p>
								<p class="font12">
									<b>Preço: </b><span id="previewprice">$1,234.56</span>
								</p>
								<p class="font12">
									<b>Contato: </b><span id="previewcontact">Jose da Silva</span>
									<b>Telefone: </b><span id="previewphone">(123) 456-7890</span>
								</p>
								<p class="pull-right font10">
									<em>
										Data: <?php echo date('Y-m-d H:i:s'); ?>
										criado por: Fulano de Tal
									</em>
								</p>
							</div>
							<div class="col-xs-3">
								<?php 
									echo $this->Html->image('imghere.gif', array('class'=>'img-responsive')); 
								?>
							</div>
						</div>
