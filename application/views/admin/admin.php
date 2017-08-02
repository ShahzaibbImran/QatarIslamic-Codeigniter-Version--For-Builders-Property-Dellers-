<?php 
include ('header-admin.php');?>
<script type="text/javascript">
  $(function() {
     $("input:myfile").change(function (){
       var fileName = $(this).val();
       $(".filename").html(fileName);
     });
  });

  function myFunction() {
    alert("Successfully Image Inserted");
}
</script>
		<section class="admin-content">
			<div class="container">
				<div class="col-sm-4 col-md-3 left-side">
					<ul>
						<li class="current-tab custom-dropdown click-to-hide" data-target="#unit-details"><span><i class="fa fa-camera" aria-hidden="true"></i></span>Image Upload Panel <i class="fa fa-chevron-down" aria-hidden="true"></i></li>	
						<div id="unit-details" class="diplay-none" >
							<li><a class="" href="<?php echo base_url('admincontroller/index');?>"><span></span>Recent Projects Images</a></li>	
							<li><a class="" href="<?php echo base_url('admincontroller/active');?>"><span></span>Active Projects Images</a></li>	
							<li><a class="" href="<?php echo base_url('admincontroller/future');?>"><span></span>Future Projects Images</a></li>	
						</div>
						<li><a href="<?php echo base_url('admincontroller/show_data_id');?>"><span><i class="fa fa-file" aria-hidden="true"></i></span>Update Projects</a></li>
						<li class="custom-dropdown click-to-hide" data-target="#unit-details1"><span><i class="fa fa-plus" aria-hidden="true"></i></span>Add Service <i class="fa fa-chevron-down" aria-hidden="true"></i></li>
						<div id="unit-details1" class="diplay-none" >
						<li><a href="<?php echo base_url('adservicescontroller/index');?>"><span></span>Add Service 1</a></li>
						<li><a href="<?php echo base_url('adservicescontroller/service2');?>"><span></span>Add Service 2</a></li>
						<li><a href="<?php echo base_url('adservicescontroller/service3');?>"><span></span>Add Service 3</a></li>
						<li><a href="<?php echo base_url('adservicescontroller/service4');?>"><span></span>Add Service 4</a></li>
						</div>
						<li><a href="<?php echo base_url('calculatorcontroller/index');?>"><span><i class="fa fa-calculator" aria-hidden="true"></i></span>Add Calculator Value</a></li>
						<li><a href="<?php echo base_url('headerfootercontroller/index');?>"><span><i class="fa fa-calculator" aria-hidden="true"></i></span>Add Header Footer Content</a></li>
						<li><a href="<?php echo base_url('pagesortingcontroller/index');?>"><span><i class="fa fa-file" aria-hidden="true"></i></span>Menu Sorting</a></li>
					</ul>
				</div>
				<div class="col-sm-6  form">
						<h2 class="pink-md-heading">Image Upload For Recent Projects</h2>
						<?php echo form_open_multipart('admincontroller/insertDB1') ?>
								<div class="col-sm-6 form-input-padding-left">
									<div class="form-group">
										 <input type="file" id="file-upload1" name="myfile" style="display: none;" required>
										<label for="file-upload1" class="btn form-control file-upload rounded" name="myfile"><span class="image"><i class="fa fa-picture-o" aria-hidden="true" ></i></span>Choose File</label>
									</div>
								</div>	
						<div class="col-sm-6 form-input-padding-right">
							<div class="form-group">
								<input type="text" class="form-control" name="image_name" placeholder="Name.." required>
							</div>
						</div>	
						<div class="col-sm-6 form-input-padding-right">
							<div class="form-group">
								<input type="text" class="form-control" name="image_location" placeholder="Location.." required="">
							</div>
						</div>
						<div class="form-group">
								<textarea class="form-control" rows="6" placeholder="Description..." name="image_description" required=""></textarea>
							</div>
						  <button type="submit" value="upload" class="btn btn-primary">Image Upload For Recent Projects</button>
					<?php echo form_close() ?>
				</div>
			</div>
		</section>	
		<!-- header-ended -->

		<!-- section-projects -->
		<!-- <section class="our-projects sec-space">
			<div class="container">
				<div class="col-sm-10 col-sm-offset-1 ">
					<h2 class="lg-heading text-center">Delete Projects Below</h2>
				</div>
			</div>
		</section> -->
		<!-- section-projects-ended -->
				

		<!-- section-recent-projects-details -->
		<!--<section class="projects-details gallery">-->
			<!--<div class="conatiner">-->
			<!--<?php
			//$data2 = $this->db->get_where('gallery',array('project_cat' => 1));
    		//$data2 = $data2->result_array();
    		//$i = 1;
			//foreach($data2 as $datas2) {
				//echo '<div class="row serach-result-main">
					//<div class="col-sm-9 col-sm-offset-1  searched-data">
					//<div class="col-30-serach">
						//<img src="' . $datas2['imageurl'] . '" style="width: 30%;"/>
						//<a type="submit" href="'.base_url().'admincontroller/deleteDB1/'.$datas2['id'].' "class="btn btn-primary">Delete</a>
						/*<a type="submit" href="'.base_url().'admincontroller/updateDB1/'.$datas2['id'].' "class="btn btn-primary">Edit</a>*/
						//</div>
						//<div class="col-70-serach">
							//<h4>'.$datas2['name'].'</h4>
							//<h5>'.$datas2['location'].'</h5>
							//<p>'.$datas2['description'].'</p>
						//</div>
					//</div>
				//</div>';	
			//}
				//?>
			<!--</section>-->
		<!-- section-recent-projects--ended -->
	


<?php 
include ('footer-admin.php');
?>