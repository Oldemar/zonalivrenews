<div class="container">
<?php
//	echo '<pre>'.print_r($vertads,true).'</pre>';
/*
 *	Mostra horizontal advertize 
 *
 */

	echo $this->element('horiz-ad',array('param'=>$horizads));	

?>
</div>
<?php
/*
 *	Mostra a noticia escolhida
 *
 */
	echo $this->element('categories');

/*
 *	Mostra ultima noticia 
 *
 */

	echo $this->element('onthenet');

/*
 *	Mostra mensagem patrocinada 
 *
 */

	echo $this->element('sponsored');

/*
 *	Mostra leia tambem 
 *
 */

	echo $this->element('dontmiss');

?>
<div class="container">
<?php
//	echo '<pre>'.print_r($vertads,true).'</pre>';
/*
 *	Mostra horizontal advertize 
 *
 */

	echo $this->element('horiz-ad',array('param'=>$horizads));	

?>
</div>
