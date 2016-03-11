<?php
//	echo '<pre>'.print_r($catIds,true).'</pre>';
?>
<div class="row ptop5">
	<div class="col-xs-12 col-sm-8">
		<?php
		if ( count($classifieds) > 0 ) {
			foreach ($classifieds as $key => $classified) { 
				switch ($classified['Classified']['featured']) {
					case '0':
						$font = 'font12';
						$bg = '';
						echo $this->element('Classifieds/minnofeatured',array('classified'=>$classified,'bg'=>$bg,'font'=>$font));
						break;
					
					case '1':
						$font = 'font14';
						$bg = 'bg-info';
						echo $this->element('Classifieds/minnofeatured',array('classified'=>$classified,'bg'=>$bg,'font'=>$font));
						break;

					case '2':
						echo $this->element('Classifieds/midfeatured',array('classified'=>$classified));
						break;					
				}
			}
		} else {
			echo $this->element('Classifieds/zlad');
		} ?>
	</div>
</div>
