<div class="container">
<?php
//	echo '<pre>'.print_r($vertads,true).'</pre>';
/*
 *	Mostra seção horizontal advertize
 *
 */

	echo $this->element('horiz-ad',array('param'=>$horizads));	

?>
</div>
<?php
/*
 *	Mostra seção ultima noticia 
 *
 */

	echo $this->element('lastnews',array('param'=>$lastNews));	

/*
 *	Mostra seção ultima noticia 
 *
 */

	echo $this->element('Templates/hotnews',array('param'=>$hotNews,'ads'=>$vertads));

/*
 *	Mostra seção mensagem opinions
 *
 */

	echo $this->element('Templates/opinions');

/*
 *	Mostra seção mensagem patrocinada 
 *
 */

	echo $this->element('sponsored');

/*
 *	Mostra seção leia tambem 
 *
 */

	echo $this->element('dontmiss');

?>
<div class="container">
<?php
//	echo '<pre>'.print_r($vertads,true).'</pre>';
/*
 *	Mostra seção horizontal advertize 
 *
 */

	echo $this->element('horiz-ad',array('param'=>$horizads));	

?>
</div>
