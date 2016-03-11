<div class="container">
	<hr>
</div>
<div class="container content-padding bgdontmiss borsertop">
<?php //echo '<pre>'.print_r($dontmiss,true).'</pre>'; ?>
	<div class="row">
		<div class="col-xs-12 pbot10 ptop10">
			<h4>Leia também ( <?php echo count($dontmiss); ?> )</h4>
		</div>
		<div class="row owlrow">
			<div id="myowl" class="owl-carousel">
			<?php foreach ($dontmiss as $key => $missed) { ?>
				<div class="item">
					<div class="myowlitem noborder">
						<?php echo $this->Html->image($missed['Media'][0]['source'],array('class'=>'img-responsive')) ?>
						<p class="ln_cat">
							<?php echo $this->Html->link($missed['Category']['name'],array('controller'=>'news','action'=>'subcatnews',$missed['Category']['id']),array('class'=>"btn-link-red bold")); ?>
						</p>
						<?php echo $this->Html->link($missed['News']['title'],array('controller'=>'news','action'=>'thenews',$missed['News']['id']),array('class'=>"btn-link-gray bold") ); ?>
							
						</a>
					</div>
				</div>
			<?php } ?>
			</div>
			<div class="customNavigation hidden-xs">
				<a class="btn prev font20"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span></a>
				<a class="btn next font20"><span class="glyphicon glyphicon-forward" aria-hidden="true"></span></a>
				<a class="btn play font20"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></a>
				<a class="btn stop font20"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span></a>	
			</div>
		</div>
	</div>
</div>
<div class="container">
	<hr>
</div>
<script type="text/javascript">
	$(document).ready(function() {
 
		var owl = $("#myowl");

			owl.owlCarousel({
				items : 6, //10 items above 1000px browser width
				itemsDesktop : [1000,5], //5 items between 1000px and 901px
				itemsDesktopSmall : [900,3], // betweem 900px and 601px
				itemsTablet: [600,2], //2 items between 600 and 0
				itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
			});
/*		 
			// Custom Navigation Events
			$(".next").click(function(){
				owl.trigger('owl.next');
			})
			$(".prev").click(function(){
				owl.trigger('owl.prev');
			})
			$(".play").click(function(){
				owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
			})
			$(".stop").click(function(){
				owl.trigger('owl.stop');
  			})
*/
	});
</script>