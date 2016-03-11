<?php
//echo '<pre>'.print_r($catOptions,true).'</pre>';
//echo '<pre>'.print_r($categories,true).'</pre>';
//echo '<pre>'.print_r($categs,true).'</pre>';
?>
<div class="container content-padding">
	<?php echo $this->element('Classifieds/search'); ?>
	<div class="row font13" style="border-top:2px solid #222">
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 hidden-xs">
			<?php 
			echo $this->Form->select('categs',$catOptions,array(
				'empty'=>'Escolha uma categoria',
				'class'=>'form-control')); 
			?>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-6 col-lg-7 pleft0"  style="border-left:2px solid #222">
			<div class="row pleft15">
				<div class="col-xs-10 col-sm-6"><h4>Classificados Recentes</h4></div>
				<div class="col-xs-2 col-sm-2 col-sm-offset-4">
					<select class="form-control" id="limit">
						<option value="5">5</option>
						<option value="10">10</option>
						<option value="25">25</option>
						<option value="50">50</option>
					</select>
				</div>

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