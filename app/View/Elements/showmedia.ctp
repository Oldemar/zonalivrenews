<?php
if ($param['mediatype'] == 0)  
	echo $this->Html->image($param['url'].$param['source'],array('class'=>'img-responsive')); 
if ($param['mediatype'] != '0')
	echo $this->Html->media($param['url'].$param['source'],array('controls','width'=>'100%')); 
if (!is_null($param['description'])) {
?>
<p id="ln_media_desc">
	<small><em><?php echo $param['description']; ?></em></small>
</p>
<?php 
} 
?>