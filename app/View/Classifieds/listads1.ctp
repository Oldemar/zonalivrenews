<?php
//echo '<pre>'.print_r($catOptions,true).'</pre>';
//echo '<pre>'.print_r($categories,true).'</pre>';
//echo '<pre>'.print_r($categs,true).'</pre>';
?>
<div class="container content-padding">
	<?php echo $this->element('Classifieds/search'); ?>	
	<div class="row font13" style="border-top:2px solid #222">
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 hidden-xs">
			<ul class="nav nav-stack">
				<li>
					<?php
						echo $this->Html->link('Todas as Categorias','#',array('class'=>"btn-link-gray noborder linkListClassif",'data-cid'=>'31'));
					?>
				</li>
			<?php
				foreach ($categs as $key => $parent) {
					if ($parent['Category']['parent_id'] == '31'){
						echo '<li class="li-cat" style="padding: 0">';
						$parentUL = "ulCat_".$parent['Category']['id'];
						$parentAnchorAttribs = count($parent['children']) > 0 ?
							" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"".$parentUL."\"" :
							'';
						echo $this->Html->link($parent['Category']['name'],"#$parentUL",array('class'=>"btn-link-gray noborder linkListClassif",'data-cid'=>$parent['Category']['id'],$parentAnchorAttribs));
						if (count($parent['children']) > 0) {
							echo '<ul class="collapse nav nav-stack" id="'.$parentUL.'">';
							foreach ($parent['children'] as $keyChild => $child) {
								echo '<li class="li-cat">';
								$childUL = "ulCat_".$child['Category']['id'];
								$childAnchorAttribs = count($child['children']) > 0 ?
									" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"".$childAnchorAttribs :
									'';
								echo $this->Html->link('. '.$child['Category']['name'],"#$childUL",array('class'=>"btn-link-gray noborder linkListClassif font12",'data-cid'=>$child['Category']['id'],$childAnchorAttribs));

								if (count($child['children'] > 0)) {
									echo '<ul class="collapse nav nav-stack" id="'.$childUL.'">';
									foreach ($child['children'] as $keyGrandChild => $grandChild) {
										echo '<li class="li-cat">';
										echo $this->Html->link('. . '.$grandChild['Category']['name'],"#",array('class'=>"btn-link-gray noborder linkListClassif font12",'data-cid'=>$grandChild['Category']['id']));
										echo '</li>';
									}
									echo '</ul>';
								}
								echo '</li>';
							}
							echo '</ul>';
						}
						echo '</li>';
					}
				}
			?>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 pleft0"  style="border-left:2px solid #222">
			<div class="row pleft15">
				<h4>Postadas recentemente</h4>
			</div>
			<div class="row" id="ads-list">				
			</div>
			<div class="row pleft15">
				<ul class="pagination pagination-sm">
					<li>
						<a class="page-item" data-limit="5" data-offset="0" href="#" class="page-item" aria-label="Primeiro">
						<span aria-hidden="true">Primeiro</span>
						</a>
					</li>
					<li>
						<a href="#" class="page-item" aria-label="Anterior">
						<span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
						</a>
					</li>
					<li><a class="page-item" data-limit="5" data-offset="0" href="#">1</a></li>
					<li><a class="page-item" data-limit="5" data-offset="5" href="#">2</a></li>
					<li>
						<a href="#" class="page-item" aria-label="Proximo">
						<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
						</a>
					</li>
					<li>
						<a href="#" class="page-item" aria-label="Último">
						<span aria-hidden="true">Último</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var id, 
		url = "<?php echo Router::url(array('controler'=>'classifieds','action'=>'listclassifiedsajax')) ?>"; 
	$('.linkListClassif').click(function(e){
		e.preventDefault();
		id = $(this).data('cid') ;
		getClassifieds(id,5,0);
		$('#ads-list').show();
		$('#addclass').hide();
	});

	$('#catOptions').change(function(){
		id = $('#catOptions').val();
		getClassifieds(id);
	});
	$('.page-item').on('click', function(e){
		e.preventDefault();
		getClassifieds($(this).data('cid'),$(this).data('limit'),$(this).data('offset'));
	});

	function getClassifieds(cid, limit, offset) {
		$.ajax({
			url: url,
			dataType: 'json',
			crossDomain: true,
			method: 'POST',
			data: { id: cid, limit: limit, offset: offset }
		}).done(function(data){
			$('#ads-list').html(data['html']);
			$('.pagination').find('.page-item').attr('data-cid',cid);

		});
	}
	$('#addclassified').click(function(e){
		e.preventDefault();
		$('#ads-list').hide();
		$('#addclass').show();
	});
</script>