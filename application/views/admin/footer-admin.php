		<section class="copy-right">
			<p>&copy; 2017, All Rights Reserved. <span>|</span> Designed &amp; Developed By: <a href="#">Startupbug.net</a></p>
		</section>
		<!-- footer-ended -->
		
		
    <script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>
	<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
	<script src="<?php echo base_url();?>assets/admin/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
			
			$('.max-height').each(function(){  
				 var $columns = $('.equal-height',this);
				 var maxHeight = Math.max.apply(Math, $columns.map(function(){
					 return $(this).height();
				 }).get());
				 $columns.height(maxHeight);
			});
			
			$('.click-to-hide').click(function() {
                    var $ele = $(this);
                    var $target = $($(this).data('target'));
			        $target.slideToggle('500', function() {
			             $ele.toggleClass('custom-plus');
			        });
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
        });
    </script>	
	<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();	
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false,allow_resize: true,default_width: 600,default_height: 300,horizontal_padding: 0});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
			});
	</script>

	
</body>
</html>