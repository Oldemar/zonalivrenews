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
 *	Mostra ultima noticia 
 *
 */
	echo $this->element('lastnews',array('param'=>$catLastNews));	

/*
 *	Mostra ultima noticia 
 *
 */

	echo $this->element('Templates/hotnews',array('param'=>$catHotNews));

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
