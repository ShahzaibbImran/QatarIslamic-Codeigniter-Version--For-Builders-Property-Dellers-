<section class="main-banner" style="background-image: url('<?php echo base_url();?>assets/img/product-banner.jpg');">
			<div class="container banner-content other-banner-content content-para product-banner">
				<div class="col-sm-5 ">
					<div class="col-sm-offset-3 col-sm-9 other-bordered">
						<h1>our<br>creative<br>work</h1>
					</div>	
				</div>	
			</div>	
		</section>
		<!-- section-calulate-content -->
			<!-- section-projects -->
		<section class="our-projects sec-space">
			<div class="container">
				<div class="col-sm-10 col-sm-offset-1 ">
					<h2 class="lg-heading text-center">Results Of Search Projects</h2>
					<p>Since 1996 QITCC completed successful high profile projects in construction filed. We believe that the key to a successful project lies in the skill and experience of the management team and utilization of technology available to closely control all work to the client’s satisfaction</p>
				</div>
			</div>
		</section>
		<!-- section-projects-ended -->
		
		<!-- section-recent-projects-details -->
		
		
		
		<section class="projects-details gallery">
			<div class="conatiner">
			<?php
			foreach($searchresult as $rows) {
				echo '<div class="row serach-result-main">
					<div class="col-sm-9 col-sm-offset-1  searched-data">
					<div class="col-30-serach">
							<img src="'.$rows->imageurl.'" />
						</div>
						<div class="col-70-serach">
							<h4>'.$rows->name.'</h4>
							<h5>'.$rows->location.'</h5>
							<p>'.$rows->description.'</p>
						</div>
					</div>
				</div>';	
			}
				?>
			</section>
		
		