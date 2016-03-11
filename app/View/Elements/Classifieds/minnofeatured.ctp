		<div class="row pleft0 ptop10 <?php echo $bg; ?>" style="border-bottom: 1px solid #CCC">
			<div class="col-xs-9">
				<p class="<?php echo $font; ?>">
				<?php
				$line = ''; 
				echo $this->Html->link(h($classified['Classified']['title']), array('action'=>'showclassified'), array('class'=>'btn-link-gray bold font16')); 
				if ( $classified['Brand']['name'] != null ) {
					$line .= '<b>Marca: </b>'.$classified['Brand']['name'];
				} 
				?> 
				<?php
				if ( $classified['Classified']['model'] != null ) {
					$line .= $classified['Brand']['name'] != null ? ' - ' : '';
					$line .= '<b>Modelo: </b>'.$classified['Classified']['model']; 
				}
				?> 
				<?php
				if ( $classified['Classified']['year'] != null ) {
					$line .= $line != '' ? ' - ' : '';
					$line .= '<b>Ano: </b>'.$classified['Classified']['year'];
				}
				if ($line != '') {
					echo '<br>'.$line;
				}
				?>
				</p>
				<p class="<?php echo $font; ?>">
					<?php echo $classified['Classified']['description']; ?>
				</p>
				<p class="<?php echo $font; ?>">
					<b>Preço: </b>$<?php echo money_format('%i',$classified['Classified']['price']); ?>
					<br>
					<b>Contato: </b><?php echo $classified['Classified']['contact']; ?>
					<b>Telefone: </b><?php echo $classified['Classified']['phone']; ?>
					<br><span class="pull-right font10">
						<em>
						Data: <?php echo $classified['Classified']['created']; ?>
						por: <?php echo $classified['User']['fullname']; ?>
						</em>
					</span>
				</p>

			</div>
			<div class="col-xs-3">
				<?php 
					if (isset($classified['Adimages'][0]['source']) ) {
						echo $this->Html->image($classified['Adimages'][0]['source'], array('class'=>'img-responsive')); 
					} ?>
			</div>
		</div>
