		<!-- footer-started -->
		<section class="footer">
			<div class="container max-height">
				<div class="col-sm-5 footer-sub equal-height no-padding">
					
					<div class="col-sm-10 ">
					<h3>About Us</h3>
					<p>The construction sector in Qatar witnesses a remarkable development due to the strength of the Qatari economy and the encouraging procedures that stimulates investors to invest in this sector. This sector has been clearly evident in the urban growth and development, which included various cities in Qatar....</p>
					</div>
				</div>
				<div class="col-sm-3 no-padding footer-sub equal-height">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-9">
						<h3>QUICK LINKs</h3>
			<?php
    		$menus = $this->db->get('linksortingfooter');
    		$menus = $menus->result_array();
			echo '<ul>';
			foreach($menus as $menu) {
       		echo '
       		<li class="">
			<a href="'.$menu['link'].'"><span></span>'.$menu['name'].'</a>
			</li>
       		';
    		}?>
			</ul>
					</div>		
				</div>
				<div class="col-sm-4 footer-social footer-sub equal-height">
					<div class="col-sm-2">
					</div>
					<div class="col-sm-10 no-mb-padding">	
						<h3>Email Us:</h3>
					<?php
    				$email = $this->db->get('header');
    				$email = $email->result_array();
					foreach($email as $e) {
					echo '<a href="'.$e['email'].'"><span></span><i class="fa fa-envelope-open" aria-hidden="true"></i> '.$e['email'].'</a>';
							}
					?>
						<h3 style="margin-bottom: 20px;margin-top: 20px;">Socialize With Us:</h3>
							<div class="social-links">
								<?php
    				$fb = $this->db->get('header');
    				$fb = $fb->result_array();
					foreach($fb as $f) {
       		 		echo '<a href="'.$f['fb'].'"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
							}
					?>

					<?php
    				$twitter = $this->db->get('header');
    				$twitter = $twitter->result_array();
					foreach($twitter as $t) {
       		 		echo '<a href="'.$t['twitter'].'"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
							}
					?>
					<?php
    				$instagram = $this->db->get('header'); // Retrieve photos from DB
    				$instagram = $instagram->result_array();
					foreach($instagram as $i) {
       		 		echo '<a href="'.$i['insta'].'"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
							}
					?>
							</div>
						<h3 style="margin-top: 20px;">Call Us:</h3>
					<?php
    				$number = $this->db->get('header');
    				$number = $number->result_array();
    				foreach($number as $n) {
    				echo '<a style="padding-left: 2px;" href="'.$n['number'].'"><span></span><i class="fa fa-phone" aria-hidden="true"></i> '.$n['number'].'</a>';
							}
					?>
					</div>	
				</div>
			</div>
		</section>
		<section class="copy-right">
			<p>&copy; 2017, All Rights Reserved. <span>|</span> Designed &amp; Developed By: <a href="#">Startupbug.net</a></p>
		</section>
		<!-- footer-ended -->
		
		
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
	<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
	<script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
			
			$('.max-height').each(function(){  
				 var $columns = $('.equal-height',this);
				 var maxHeight = Math.max.apply(Math, $columns.map(function(){
					 return $(this).height();
				 }).get());
				 $columns.height(maxHeight);
			});
			
			$(".filter-button").click(function(){
				var value = $(this).attr('data-filter');
				
				if(value == "all")
				{
					//$('.filter').removeClass('hidden');
					$('.filter').show('1000');
				}
				else
				{
		//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
		//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
					$(".filter").not('.'+value).hide('3000');
					$('.filter').filter('.'+value).show('3000');
					
				}
			});
				
				if ($(".filter-button").removeClass("active")) {
			$(this).removeClass("active");
			}
			$(this).addClass("active");	
			
			
			
			$(".hide-data-button").click(function() {
				$(".form-cal-hidden").hide();
			});
			
			
			
			$('.main-hide').click(function(){	
				$('.hidebox').toggleClass('hide');
				$('.hidebox').toggleClass('show');
			});
			
			
        });
    </script>	
	<script>
		function openNav() {
			document.getElementById("mySidenav").style.left = "0px";
			document.getElementById("main").style.marginLeft = "0px";
			document.getElementById("bg-transparent").classList.add('overlay');




			
			
		}

		function closeNav() {
			document.getElementById("mySidenav").style.left = "-250px";
			document.getElementById("main").style.marginLeft= "0";
			document.getElementById("bg-transparent").classList.remove('overlay');
		}
	</script>
	
	
	<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				
				$("area[rel^='prettyPhoto']").prettyPhoto();	
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false,allow_resize: true,default_width: 800,default_height: 300,horizontal_padding: 0});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
				
			
			$(".pp_pic_holder.light_square").css("height","800");
			});
			
    var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
    if (isSafari) {
		
		$("area[rel^='prettyPhoto']").prettyPhoto();	
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false,allow_resize: true,default_width: 800,default_height: 300,horizontal_padding: 10});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
				
	function blink(){
		 $(".pp_pic_holder.light_square").css({
    height: '800px',
	position: 'fixed',
	width: '100%'
});
 //$(".pp_pic_holder.light_square").css("height","800");

 
}
setInterval(blink,100);
	
	}

			
			
	</script>
	
	

	
</body>
</html>