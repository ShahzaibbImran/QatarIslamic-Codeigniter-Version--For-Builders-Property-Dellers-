<section class="main-banner" style="background-image: url('<?php echo base_url();?>assets/img/home-baner.jpg');">
			<div class="container banner-content">
					<div class="col-sm-5">
						<div class="col-sm-2">
						</div>
						<div class="col-sm-10">
							<h1>YOUR DREAM HOUSE</h1>
						</div>	
					</div>	
				<div class="col-sm-7 no-padding banner-content-right-top">
					<div class="banner-content-right">
						<p>The whole idea of establishing the QITCC carries was based on an economical perspective. The company provides wide-range and comprehensive solutions with economical dimensions based on solid foundations and extensive studies Thus, the company would provide purely creativity engineering with an emphasis on providing the best prices to meet our customer’s desires. The company, as a result, contributes to the development of Qatar and proves its ability to compete in global levels. </p>
						<a class="btn " href="#">get free consultancy</a>
					</div>
				</div>
			</div>	
		</section>
		<section class="our-work sec-space">
			<div class="container max-height">
				<h2 class="lg-heading text-center">how we work?</h2>
				<!-- services-1 -->
				<div class="col-sm-6 col-md-3">
					<div class="our-work-sub equal-height">
						<span class="services-icon planning"></span>
						<h3>Planning</h3>
						<p>We plan and schedule your project with the required resource to complete the client project on time</p>
					</div>
					
				</div>
				<!-- services-1-ended -->
				<!-- services-2 -->
				<div class="col-sm-6 col-md-3">
					<div class="our-work-sub equal-height">
						<span class="services-icon estimate"></span>
						<h3>ESTIMATION</h3>
						<p>Prior to the project contract commencemnt, we detail out the cost and provide option of delivering the project including sekelton and turn key.</p>
					</div>
					
				</div>
				<!-- services-2-ended -->
				<!-- services-3 -->
				<div class="col-sm-6 col-md-3">
					<div class="our-work-sub equal-height">
						<span class="services-icon technical"></span>
						<h3>Technical</h3>
						<p>We provide the expertise to complete the porject with professionacy and local specification requirement</p>
					</div>
					
				</div>
				<!-- services-3-ended -->
				<!-- services-4 -->
				<div class="col-sm-6 col-md-3">
					<div class="our-work-sub equal-height">
						<span class="services-icon design"></span>
						<h3>Design</h3>
						<p>With the consultant guidance, we provide the right construction approach and in compliance with the client requirement</p>
					</div>
					
				</div>
				<!-- services-4-ended -->
			</div>
		</section>
		<!-- section-our-work-ended -->
		<!-- section-projects -->
		<section class="our-projects sec-space">
			<div class="container">
				<div class="col-md-10 col-md-offset-1">
					<h2 class="lg-heading text-center">Our Projects</h2>
					<p>Since 1996 QITCC completed successful high profile projects in construction filed. We believe that the key to a successful project lies in the skill and experience of the management team and utilization of technology available to closely control all work to the client’s satisfaction</p>
						<a href="<?php echo base_url('home/project_view');?>" class="btn btn-primary filter-button">All</a>
						<a class="btn btn-primary filter-button" href="<?php echo base_url('home/project_view');?>">Recent Projects</a>
						<a class="btn btn-primary" href="<?php echo base_url('home/project_view');?>">Active Projects</a>
						<a class="btn btn-primary" href="<?php echo base_url('home/project_view');?>">Future Projects</a>
				</div>
			</div>
		</section>
		<!-- section-projects-ended -->
		<!-- section-projects-details -->

		
		<!-- section-recent-projects-details -->
		<section class="projects-details gallery">
			<?php
			$data = $this->db->limit('3');
    		$data = $this->db->get_where('gallery',array('project_cat' => 1));
    		$this->db->limit('3');
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
			$data2 = $this->db->limit('3');
    		$data2 = $this->db->get_where('gallery',array('project_cat' => 2));
    		$this->db->limit('3');
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
				?></p>
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
			$data3 = $this->db->limit('2');
    		$data3 = $this->db->get_where('gallery',array('project_cat' => 3));
    		$this->db->limit('2');
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
				?></p>
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


		<!-- section-cost-estimate -->
		<section class="our-projects  cost-estimate sec-space">
			<div class="container">
				<div class="col-sm-10 col-sm-offset-1">
					<h2 class="md-heading text-center">calculate estimate your project cost</h2>
					<ul style="list-style: none; padding: 0; margin: 0;">
		<li><p>We can assist you in building your new dream Home. You can use our cost estimator tool to calculate the price estimate.</p></li>
	</ul>
						<a class="btn btn-primary" href="<?php echo base_url('home/calculate_view');?>">Let&rsquo;s Calculate</a>
				</div>
			</div>
		</section>
		<!-- section-cost-estimate-ended -->
		<!-- section-bottom-services -->
		<section class="bottom-services">
			<div class="container">
				<!-- bottom-services-1 -->
				<div class="col-sm-3">
					<div class="bottom-services-sub equal-height">
						<span class="services-bottom-icon contract"></span>
						<h3><?php
    		$name1 = $this->db->get('services');
    		$name1 = $name1->result_array();

   			 foreach($name1 as $name) {
       		 echo  $name['name1'] ;
    			}
			?></h3>
						<h5>MATERIALS TRADING</h5>
			<p><?php
    		$desc = $this->db->get('services');
    		$desc = $desc->result_array();

   			 foreach($desc as $descs) {
   			 	$this->load->helper('text');
   			 	/*$original_string = "We work based on modern philosophy to integrate latest technology and best practices in order to complete projects efficiently and in a timely manner. ";
				$limited_string = word_limiter($original_string , 4, '');
				$rest_of_string = trim(str_replace($limited_string, "", $original_string));
    			//echo  $descs['description1'] ;
    			echo $original_string;*/
    			$string = $descs['description1'];
    			$string = word_limiter($string, 15);
    			echo $string;
    			}
			?></p>
						<a href="<?php echo base_url('home/servicesmen_view');?>" class="btn">Read More<span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a>
					</div>
				</div>
				<!-- bottom-services-1-ended -->
				<!-- bottom-services-2 -->
				<div class="col-sm-3">
					<div class="bottom-services-sub">
						<span class="services-bottom-icon building"></span>
						<h3><?php
    		$name2 = $this->db->get('services');
    		$name2 = $name2->result_array();

   			 foreach($name2 as $name) {
       		 echo  $name['name2'] ;
    			}
			?></h3>
						<h5>REAL ESTATE</h5>
						<p><?php
    		$desc2 = $this->db->get('services');
    		$desc2 = $desc2->result_array();

   			 foreach($desc2 as $descs) {
   			 	$this->load->helper('text');
   			 	/*$original_string = $descs['description2'];
				$string = character_limiter($original_string, 20);
    			echo  $descs['description2'] ;*/
    			$string = $descs['description2'];
    			$string = word_limiter($string, 15);
    			echo $string;
       		 	}
			?></p>
						<a href="<?php echo base_url('home/servicesmen_view');?>" class="btn">Read More<span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a>
					</div>
				</div>
				<!-- bottom-services-2-ended -->
				<!-- bottom-services-3 -->
				<div class="col-sm-3">
					<div class="bottom-services-sub equal-height">
						<span class="services-bottom-icon selling"></span>
						<h3><?php
    		$name3 = $this->db->get('services');
    		$name3 = $name3->result_array();

   			 foreach($name3 as $name) {
       		 echo  $name['name3'] ;
    			}
			?></h3>
						<h5>REAL ESTATE</h5>
						<p><?php
    		$desc3 = $this->db->get('services');
    		$desc3 = $desc3->result_array();

   			 foreach($desc3 as $descs) {
   			 	$this->load->helper('text');
       		 	/*$original_string = $descs['description3'];
				$string = character_limiter($original_string, 20);
    			echo  $descs['description3'] ;*/
    			$string = $descs['description3'];
    			$string = word_limiter($string, 15);
    			echo $string;
    			}
			?></p>
						<a href="<?php echo base_url('home/servicesmen_view');?>" class="btn">Read More<span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a>
					</div>
				</div>
				<!-- bottom-services-3-ended -->
				<!-- bottom-services-4 -->
				<div class="col-sm-3">
					<div class="bottom-services-sub equal-height">
						<span class="services-bottom-icon purchase"></span>
						<h3><?php
    		$name4 = $this->db->get('services');
    		$name4 = $name4->result_array();

   			 foreach($name4 as $name) {
       		 echo  $name['name4'] ;
    			}
			?></h3>
						<h5>FOR BUILDINGS</h5>
						<p><?php
    		$desc4 = $this->db->get('services');
    		$desc4 = $desc4->result_array();

   			 foreach($desc4 as $descs) {
   			 	$this->load->helper('text');
   			 	/*$original_string = $descs['description4'];
				$string = character_limiter($original_string, 20);
       			echo  $descs['description4'] ;*/
       			$string = $descs['description4'];
    			$string = word_limiter($string, 15);
    			echo $string;
    			}
			?></p>
						<a href="<?php echo base_url('home/servicesmen_view');?>" class="btn">Read More<span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a>
					</div>
				</div>
				<!-- bottom-services-4-ended -->
			</div>
		</section>
		<!-- section-bottom-services-ended -->		