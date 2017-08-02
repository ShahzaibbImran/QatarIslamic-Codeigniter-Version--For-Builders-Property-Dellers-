<?php 
include ('header.php');?>
		</section>
		<section class="main-banner" style="background-image: url('assets/img/page-quote-banner.jpg');">
			<div class="container banner-content other-banner-content content-para">
				<div class="col-sm-6 ">
					<div class="col-sm-12 other-bordered">
						<h1>reduce your debt dramatically</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
					</div>	
				</div>	
				<div class="col-sm-6 no-padding cost-banner">
					<div class="col-sm-12 ">
						<h2>ESTIMATED COST CALCULATION</h2>
						<div class="col-sm-3 no-padding">
						<text>Finishing Types:</text>
							<form>
								<div class="form-group">
									<label>
										<input type="radio" value="Skeleton" class="form-control" name="a">
										<span>Skeleton</span>
									</label>
									<label>
										<input type="radio" value="Turn Key" class="form-control" name="a">
										<span>Turn Key</span>
									</label>
								</div>
							
						</div>
						<div class="col-sm-9 no-padding cost-left-input-padding">
								<div class="col-sm-5 no-padding">
									<text>Total Build Area(m2)</text>
								</div>
								<div class="col-sm-7 no-padding">
									<div class="form-group">
											<input type="text" value="" class="form-control" name="" placeholder="54" required>
									</div>
									<button type="submit" class="btn btn-primary">Next</button>
								</div>	
						</form>
						</div>
					</div>	
				</div>	
			</div>	
		</section>
		<!-- section-calulate-content -->	
		<!-- section-meet-up -->
		<section class="meetup sec-space">
			<div class="container quote-form-section-top">
				<div class="col-sm-7 no-padding">
					<div class="col-sm-2">
					<span class="msg-icon-img"></span>
					</div>
					<div class="col-sm-10 contact-content">
						<h2 class="pink-md-heading">dummy heading</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage.</p>
					</div>
				</div>
				<div class="col-sm-5 quote-page-form-top no-padding contact-page-form quote-page-form">
					<?php echo form_open_multipart('email/sendEmail')?>
						<div class="col-sm-6 form-input-padding-left">
							<div class="form-group">
								<input type="text" class="form-control"  name="name" placeholder="Name" required>
							</div>
						</div>	
						<div class="col-sm-6 form-input-padding-right">
							<div class="form-group">
								<input type="email" class="form-control" name="email"   placeholder="Email" required>
							</div>
						</div>	

							<div class="form-group" method="post">
								<input type="text" class="form-control" name="phone"   placeholder="Phone" value="<?=set_value('phone');?>" pattern="[0-9]{4,}" title="Enter Valide Phone Number" required>
							</div>

				
		
							<div class="form-group">
								 <input type="file" id="file-upload" name="attachment" style="display: none;" required>
                                <label for="file-upload" class="btn form-control file-upload">Upload a file <span><i class="fa fa-cloud-upload" aria-hidden="true" required></i></span></label>
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="6" placeholder="Message" value="<?=set_value('message');?>" required></textarea>
							</div>
						  <button type="submit" class="btn btn-primary" name="email/sendEmail" <?php echo base_url('email/sendEmail');?>>UPLOAD</button>
					<?php echo form_close();?>
				</div>
			</div>
		</section>
		<!-- section-meet-up-ended -->		

<?php 
include ('footer.php');
?>