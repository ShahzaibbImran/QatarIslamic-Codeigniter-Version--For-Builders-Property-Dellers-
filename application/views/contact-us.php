<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
</script>
<script>
	function clearfields(){
    document.getElementById("name").value="";
    document.getElementById("email").value="";
    document.getElementById("phone").value="";
    document.getElementById("subject").value="";
    document.getElementById("message").value="";
}
</script>
<section class="main-banner" style="background-image: url('<?php echo base_url();?>assets/img/contact-us-banner1.jpg');">
			<div class="container banner-content other-banner-content">
					<div class="col-sm-5 ">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-12 col-md-8 other-bordered">
							<h1 class="">Contact Us</h1>
						</div>	
					</div>	
			</div>	
		</section>
		<!-- section-meet-up -->
		<section class="meetup sec-space">
			<div class="container contact-form-section-top">
				<div class="col-sm-7 no-padding">
					<div class="col-sm-2 ">
					<span class="msg-icon-img"></span>
					</div>
					<div class="col-sm-10 contact-content">
						<h2 class="pink-md-heading">Meet us</h2>
						<p>QITCC is here to provide you with more information, answer any questions you may have and create effective solutions for your constructional needs. Please use the contact form on the right side if you have any questions or requests concerning our services.</p>
						<p>We will respond to your message within 24 Hours</p>
						
						</div>
				</div>
				<div class="col-sm-5 contact-page-form-top no-padding contact-page-form">
				<?php echo form_open_multipart('email/send')?>
							<div class="col-sm-6 form-input-padding-left">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name" required>
							</div>
						</div>	
						<div class="col-sm-6 form-input-padding-right">
							<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>
						</div>	
						<div class="col-sm-6 form-input-padding-left">
							<div class="form-group">
								<input style="width: 100%;" type="text" class="number-only" class="form-control" name="phone" placeholder="Phone" pattern="[0-9]{4,}" title="Enter Valide Phone Number" required>
							</div>
						</div>	
						<div class="col-sm-6 form-input-padding-right">
							<div class="form-group">
								<input type="text" class="form-control" name="subject" placeholder="Subject" required>
							</div>
						</div>	
							<div class="form-group">
								<textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
							</div>
					<button type="submit" name="email/send" class="btn btn-primary" value="email/send">Submit</button>
						  
					<?php echo form_close();?>
				</div>
			</div>
		</section>
		<!-- section-meet-up-ended -->

		
		<!-- section-social -->
		<section class="contact-social sec-space">
			<div class="container">
				<div class="col-md-4 col-lg-2 col-sm-4 no-padding">
					<div class="social-box">
						<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						<text>United Street Same building as QIIB (bank) Entrance 2 Office no. 13 </text>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-4 no-padding">
					<div class="social-box">
						<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<text>Phone: 40164787</text> 
						<text>Fax: 40164789</text>
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-4 no-padding">
					<div class="social-box">
						<span class="icon"><i class="fa fa-envelope-open" aria-hidden="true"></i></span>
						<a href="mailto:contactus@qatarislamic.com">contactus@qatarislamic.com</a> 
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-4 no-padding">
					<div class="social-box common">
						<span class="icon fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
						<text>5000 Likes</text> 
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-4 no-padding">
					<div class="social-box common">
						<span class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span>
						<text>2000 Followers</text>  
					</div>
				</div>
				<div class="col-md-4 col-lg-2 col-sm-4 no-padding">
					<div class="social-box common">
						<span class="icon pin"><i class="fa fa-instagram" aria-hidden="true"></i></span>
						<text>2530 Followers</text>  
					</div>
				</div>
			</div>
		</section>
		<!-- section-social-ended -->


	




