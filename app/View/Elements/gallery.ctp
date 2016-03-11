<div class="container content-padding">
	<div class="row">
		<div id="gallery" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<?php for ($i=0; $i < count($gallery['Media']); $i++) { 
				$classActive = $i == 0 ? 'class="active"' : '';
				echo '<li data-target="#gallery" data-slide-to="'.$i.'" '.$classActive.'"></li>';
			}
			?>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			<?php
				foreach ($gallery['Media'] as $key => $media) {
			?>
				<div class="item text-center <?php echo $key == 0 ? 'active' : ''; ?>" style="height: 500px; overflow: hidden; text-align: center;">
					<?php
						echo $this->Html->image($media['source']);
					?>
					<div class="carousel-caption">
					    <h3>
					    <?php echo $media['title']; ?>
					    </h3>
					    <p>
					    	<?php echo $media['description']; ?>
					    </p>
					</div>
				</div>
			<?php
				}
			?>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#gallery" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#gallery" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>