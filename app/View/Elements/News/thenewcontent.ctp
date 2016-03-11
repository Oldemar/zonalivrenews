<?php
	$paragraphs = explode('. ',$param['News']['content']);
?>
<div>
<?php
	$i = 1;
	echo '<p class="font20 bold">'.$param['News']['subtitle'].'</p>';
	echo $this->element('emailsubscribe');
	foreach ($paragraphs as $key => $paragraph) {
		if (isset($param['Media'][$i])) {
			if($key == round(count($paragraphs)/3)*$i) {
				echo '<div style="width: 300px; margin-right: 10px; padding: 10px 10px 10px 0; float:left">';
				if (isset($param['Media'][$i])) {
					echo $this->element('showmedia',array('param'=>$param['Media'][$i])) ;
			 		$i++;
				}
				echo '</div>';
			}
		}
		echo '<p class="font20">'.$paragraph.'.</p>';
	}
?>	
</div>
<div class="clearfix"></div>