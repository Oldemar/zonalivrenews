<?php
$rdm = rand(0,count($param)-1);
$imgRandom = $param[$rdm]['Ads']['source'];
?>
			<p>
			<?php 
				if (!$logged_in || !$noads )
					echo $this->Html->image($imgRandom,array('class'=>'img-responsive')) ?>
			</p>
