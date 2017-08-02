<?php 
include ('header-admin.php');?>
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
						<h2 class="pink-md-heading">Add service 4</h2>
						<?php echo form_open_multipart('adservicescontroller/insert4/'); ?>
						<div class="form-group">
							<input type="text" class="form-control" name="service_name" placeholder="Name.."  value = "<?=set_value('service_name');?>" required>
						</div>
						<div class="form-group">
								<textarea class="form-control" rows="6" placeholder="Description..." name="service_description" value="<?=set_value('service_description');?>" required=></textarea>
							</div>
						  <button type="submit" name="submit" class="btn btn-primary">UPLOAD SERVICE</button>
					<?php echo form_close();?>
				</div>
			</div>
		</section>	
		<!-- header-ended -->

<?php 
include ('footer-admin.php');
?>