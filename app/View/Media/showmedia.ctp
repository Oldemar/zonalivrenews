<div class="container content-padding">
	<div class="col-xs-12 col-sm-6 col-sm-offset-3 well">
		<p class="font20 bold"><?php echo $media['Media']['title'] ?></p>
			<?php echo $this->element('showmedia',array('param'=>$media['Media'])); ?>
		<div class="alert alert-info" role="alert">A imagem esta <em><b><?php echo $media['Media']['active'] ? 'ativa':'desativada'; ?></b></em> e <b><em><?php echo $media['Media']['share'] ? '':'não '; ?></em></b> pode ser compartlhada com outras matérias.</div>
		<?php
			$redir = $canPostOpinion ? array('action'=>'index',$objLoggedUser->getID()) : array('action'=>'index') ;
			echo $this->Html->link('Voltar',$redir,array('class'=>'btn btn-sm btn-default pull-right')); ?>
	</div>
</div>