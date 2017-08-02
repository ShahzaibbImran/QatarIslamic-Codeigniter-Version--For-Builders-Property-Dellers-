<section class="main-banner" style="background-image: url('<?php echo base_url();?>assets/img/our-services-sub-banner.jpg');">
			<div class="container banner-content other-banner-content sub-services-banner">
				<div class="col-sm-6 ">
					<div class="col-sm-12 other-bordered">
						<h1>our services</h1>
					<p>QITCC offers standard construction and construction related services to meet the client and market requirements of the sector. Our construction expertise, project approach and our value engineering ability can provide significant cost savings to our clients.</p>
					<p>Presently we have the following tailored services for our clients to choose from;</p>
					</div>	
				</div>	
			</div>	
	</section>
	<!-- 1-repeat--just-use-pink-class-if-needed -->
	<section class="our-services-content">
			<div class="container">
				<div class="col-sm-9 no-padding">
					<h2 class="pink-md-heading">
			<?php
    		$name1 = $this->db->get('services');
    		$name1 = $name1->result_array();

   			 foreach($name1 as $name) {
       		 echo  $name['name1'] ;
    			}
			?></h2>
					<!--<h5>FOR BUILDINGS</h5>-->
					<?php
    		$desc = $this->db->get('services');
    		$desc = $desc->result_array();

   			 foreach($desc as $descs) {
       		 echo  $descs['description1'] ;
    			}
			?>			
				</div>
				<div class="col-sm-3 text-center">
					<span class="icon-contract-big"></span>
				</div>
			</div>	
	</section>
	<!-- 2-repeat--just-use-pink-class-if-needed -->
	<section class="our-services-content pink">
			<div class="container">
				<div class="col-sm-3 text-center">
					<span class="icon-building-big"></span>
				</div>
				<div class="col-sm-9 no-padding">
					<h2 class="pink-md-heading">
						<?php
    		$name2 = $this->db->get('services');
    		$name2 = $name2->result_array();

   			 foreach($name2 as $name) {
       		 echo  $name['name2'] ;
    			}
			?>
					</h2>
					<!--<h5>MATERIALS TRADING</h5>-->
					<?php
    		$desc2 = $this->db->get('services');
    		$desc2 = $desc2->result_array();

   			 foreach($desc2 as $descs) {
       		 echo  $descs['description2'] ;
    			}
			?>			
				</div>
			</div>	
	</section>
	<!-- 3-repeat--just-use-pink-class-if-needed -->
	<section class="our-services-content">
			<div class="container">
				<div class="col-sm-9 no-padding">
					<h2 class="pink-md-heading">
						<?php
    		$name3 = $this->db->get('services');
    		$name3 = $name3->result_array();

   			 foreach($name3 as $name) {
       		 echo  $name['name3'] ;
    			}
			?>
					</h2>
					<!--<h5>RealEstate</h5>-->
					<?php
    		$desc3 = $this->db->get('services');
    		$desc3 = $desc3->result_array();

   			 foreach($desc3 as $descs) {
       		 echo  $descs['description3'] ;
    			}
			?>					
				</div>
				<div class="col-sm-3 text-center">
					<span class="icon-selling-big"></span>
				</div>
			</div>	
	</section>
		<!-- 2-repeat--just-use-pink-class-if-needed -->
	<section class="our-services-content pink">
		<div class="container">
			<div class="col-sm-3 text-center">
				<span class="icon-purchase-big"></span>
			</div>
			<div class="col-sm-9 no-padding">
				<h2 class="pink-md-heading">
					<?php
    		$name4 = $this->db->get('services');
    		$name4 = $name4->result_array();

   			 foreach($name4 as $name) {
       		 echo  $name['name4'] ;
    			}
			?>
				</h2>
				<!-- <h5>RealEstate</h5>-->
				<?php
    		$desc4 = $this->db->get('services');
    		$desc4 = $desc4->result_array();

   			 foreach($desc4 as $descs) {
       		 echo  $descs['description4'] ;
    			}
			?>				
			</div>
		</div>	
	</section>
