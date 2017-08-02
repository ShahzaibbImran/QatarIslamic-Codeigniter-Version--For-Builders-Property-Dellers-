<section class="main-banner" style="background-image: url('<?php echo base_url();?>assets/img/product-banner.jpg');">
			<div class="container banner-content other-banner-content content-para product-banner">
				<div class="col-sm-5 ">
					<div class="col-sm-offset-3 col-sm-9 other-bordered">
						<h1>WE BUILD TRUST </h1>
					</div>	
				</div>
				<div class="col-sm-7 ">
	
						<p><br><br><br>We provide constructive solution for any building project. See our recent, active, future projects here. </p>
			
				</div>
				
			</div>	
		</section>
		<!-- section-calulate-content -->
			<!-- section-projects -->
		<section class="our-projects sec-space">
			<div class="container">
				<div class="col-sm-10 col-sm-offset-1 ">
					<h2 class="lg-heading text-center">Our Projects</h2>
					<p>Since 1996 QITCC completed successful high profile projects in construction filed. We believe that the key to a successful project lies in the skill and experience of the management team and utilization of technology available to closely control all work to the client’s satisfaction</p>
						<button class="btn btn-primary filter-button" data-filter="all">All</button>
						<button class="btn btn-primary filter-button" data-filter="recent">Recent Projects</button>
						<button class="btn btn-primary filter-button" data-filter="active-pro">Active Projects</button>
						<button class="btn btn-primary filter-button" data-filter="future-pro">Future Projects</button>
				</div>
			</div>
		</section>
		<!-- section-projects-ended -->
		
		<!-- section-recent-projects-details -->
		<section class="projects-details gallery">
			<?php
    		$data = $this->db->get_where('gallery',array('project_cat' => 1));
    		$data = $data->result_array();
    		$i = 1;
    		foreach($data as $datas) {
       		echo '<div class="col-sm-3 project-details-sub filter recent">
       		<div class="col-sm-12 project-details-sub filter recent">
       		<img src="' . $datas['imageurl'] . '" />
       		</div>';
    		?>
			<div class="project-details-show">	
					<h5>
					<?php
    				echo  $datas['name'] ;
    				?>	
					</h5>
					<p>
				<?php
				$this->load->helper('text');
       		 	$string = $datas['description'];
    			$string = word_limiter($string, 10);
    			echo $string;
				?>
					</p>
					<a  href="#inline_demo<?php if($i > 1)echo $i;?>" rel="prettyPhoto[inline]"  class="btn">View Project</a>
					<div class="custom-product-modal max-height" id="inline_demo<?php if($i > 1)echo $i;$i++?>" style="display:none;">
					<div class="col-sm-6  bg-colored no-padding">
							<div class="product-modal-content">
					<h3>
					<?php
    				echo  $datas['name'] ;
    				?>	
					</h3>
								<div class="icon-area">
									<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
					<h4>
					<?php
    				echo  $datas['location'] ;
    				?>		
					</h4>
								</div>
				<p>
				<?php
    				echo  $datas['description'] ;
    				?>	
				</p>
							</div>
							<div class="product-modal-arrows"> 
								<text class="previous" href=""><span><i class="fa fa-long-arrow-left" aria-hidden="true"></i></span> Previous</text>
								<text  class="next" href="">Next <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></i></span></text>
								
							</div>
						</div>
			<?php
    		echo '<div class="col-sm-6 bg-colored flex no-padding product-modal-img">
       		<img src="' . $datas['imageurl'] . '" />
       		</div>';
       		?>
       		</div>
				</div>
			</div>
			<?php
			}
			?>
			<!-- section-recent-projects--detail-1-ended -->
			


			<!-- section-active-projects-details -->
			<?php
    		$data2 = $this->db->get_where('gallery',array('project_cat' => 2));
    		$data2 = $data2->result_array();
			foreach($data2 as $datas2) {
       		echo '<div class="col-sm-3 project-details-sub filter active-pro">
       		<div class="col-sm-12 project-details-sub filter active-pro">
       		<img src="' . $datas2['imageurl'] . '" />
       		</div>';
    		?>
			<div class="project-details-show">	
					<h5>
					<?php
    				echo  $datas2['name'];
					?>	
					</h5>
					<p>
				<?php
				$this->load->helper('text');
       		 	$string = $datas2['description'];
    			$string = word_limiter($string, 10);
    			echo $string;
				?>
					</p>	
					<a  href="#inline_demo<?php if($i > 1)echo $i;?>" rel="prettyPhoto[inline]"  class="btn">View Project</a>
					<div class="custom-product-modal max-height" id="inline_demo<?php if($i > 1)echo $i;$i++?>" style="display:none;">
					<div class="col-sm-6  bg-colored no-padding">
							<div class="product-modal-content">
					<h3>
					<?php
    				echo  $datas2['name'] ;
    				?>			
					</h3>
								<div class="icon-area">
									<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
					<h4>
					<?php
    				echo  $datas2['location'] ;
    				?>		
					</h4>
								</div>
					<p>
					<?php
    				echo  $datas2['description'];
					?>	
					</p>
					</div>
							<div class="product-modal-arrows"> 
								<text class="previous" href=""><span><i class="fa fa-long-arrow-left" aria-hidden="true"></i></span> Previous</text>
								<text  class="next" href="">Next <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></i></span></text>
								
							</div>
						</div>
			<?php
    		echo '<div class="col-sm-6 bg-colored flex no-padding product-modal-img">
       		<img src="' . $datas2['imageurl'] . '" />
       		</div>';
    		?>
					</div>
					<!-- the modal-product-3-ended -->
				</div>
			</div>
			<?php
			}
			?>
			<!-- section-active-projects--ended -->



			<!-- section-future-projects- -->
			<?php
    		$data3 = $this->db->get_where('gallery',array('project_cat' => 3));
    		$data3 = $data3->result_array();
			foreach($data3 as $datas3) {
       		echo '<div class="col-sm-3 project-details-sub filter future-pro">
       		<div class="col-sm-12 project-details-sub filter future-pro">
       		<img src="' . $datas3['imageurl'] . '" />
       		</div>';
    		?>
				<div class="project-details-show">	
					<h5>
					<?php
    				echo  $datas3['name'];
					?>
					</h5>
					<p>
					<?php
				$this->load->helper('text');
       		 	$string = $datas3['description'];
    			$string = word_limiter($string, 10);
    			echo $string;
				?>
					</p>
					<a  href="#inline_demo<?php if($i > 1)echo $i;?>" rel="prettyPhoto[inline]"  class="btn">View Project</a>
					<div class="custom-product-modal max-height" id="inline_demo<?php if($i > 1)echo $i;$i++?>" style="display:none;">
					<div class="col-sm-6  bg-colored no-padding">
							<div class="product-modal-content">
					<h3>
					<?php
    				echo  $datas3['name'];
					?>					
					</h3>
									<div class="icon-area">
									<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
					<h4>
					<?php
    				echo  $datas3['location'] ;
    				?>		
					</h4>
								</div>
					<p>
					<?php
    				echo  $datas3['description'];
					?>	
					</p>
					</div>
							<div class="product-modal-arrows"> 
								<text class="previous" href=""><span><i class="fa fa-long-arrow-left" aria-hidden="true"></i></span> Previous</text>
								<text  class="next" href="">Next <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></i></span></text>
								
							</div>
						</div>
			<?php
    		echo '<div class="col-sm-6 bg-colored flex no-padding product-modal-img">
       		<img src="' . $datas3['imageurl'] . '" />
       		</div>';
    		?>
    		</div>
    		</div>
			</div>
			<?php
			}
			?>
			<!-- section-future-projects-ended -->
			
		</section>