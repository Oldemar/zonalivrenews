			<div class="row">
				<?php echo $this->element('showmedia',array('param'=>$param['Media'][0])) ?>
			</div>		
			<p class="font12">Por <span id="ln_author"><?php echo $param['User']['fullname']; ?></span></p>
			<div class="row">
				<?php echo $this->element('News/thenewcontent',array('param'=>$param)) ?>
			</div>
			<p id="ln_info">
				Source: 
				<span id="ln_source"><?php echo $param['News']['source']; ?></span>
			</p>
			<p><?php echo $param['News']['note']; ?></p>
