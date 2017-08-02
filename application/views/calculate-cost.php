<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script type="text/javascript">
function calculateArea2() {
    var val = $('input[name="turnkey"]:checked').val();
    var valturn = $('input[name="turnkeyvalue"]').val();
    var out = val * valturn;
    $('input[name="output2"]').val(out);
   }

  function GetSelectedVal(ele) {
       $("#typeresult").val($(ele).closest('label').text());
   }

   $(function(){
   $('.number-only').keypress(function(e) {
	if(isNaN(this.value+""+String.fromCharCode(e.charCode))) return false;
  }).on("cut copy paste",function(e){
	e.preventDefault();
  });
});


$(function() {
    $('input[id$=turnkeyvalue]').keyup(function() {
        var txtClone = $(this).val();
        $('input[id$=arearesult]').val(txtClone);
    });
});


$(document).ready(function() {
    $('#submit').click(function(e) {
        var isValid = true;
        $('input[type="text"].required').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });
                alert('Error : Enter Some Numeric Values For Making Calculations And Choose The Construction Type');
                e.preventDefault();
                window.location='http://site.startupbug.net:6999/qatarislamic/home/calculate_view';
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });
        if (isValid == false) 
            e.preventDefault();
        
    });
});
		</script>

<style type="text/css">
	button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    color: green;
}
</style>

<section class="main-banner" style="background-image: url('<?php echo base_url();?>assets/img/calculate-cost-banner.jpg');">
<div class="container banner-content other-banner-content content-para">
<div class="col-sm-6 ">
<div class="col-sm-12 other-bordered">
<h1 style="font-size: 2.5em;">BUILD YOUR DREAM HOME</h1>
<p>Thinking about building new home? Here are the tips we follow to integrate your vision with our experience </p>

<ul class="custom-bullet-para">
	<li>Choose a contractor based on their reputation and quality of work, rather than on lowest price.</li>
	<li>Visit sites built by the potential contractor to examine their quality.</li>
	<li>Be sure to contract with a reliable consultancy firm.</li>
	<li>Draw a timeline outlining all phases of the project and the date of delivery in agreement with the contractor and the consultant.</li>
	<li>Understand the property boundaries</li>
	<li>Don't Build The Most Expensive Home </li>
	<li>Plan For Outdoor Living Space</li>
	<li>Include Energy Efficient Features</li>
</ul>
<p>Get a quick cost estimate in an instant with our calculation feature</p>
</div>	
</div>	
<div class="col-sm-6 no-padding cost-banner">
<div class="col-sm-12 ">
<h2>ESTIMATED COST CALCULATION</h2>
<div class="form-cal-hidden">
<div class="col-sm-3 no-padding">
		<text>Finishing Types :</text>
		<form name="input" action="" method="POST">
		<div class="form-group">

		<?php $calc = $this->db->get('calculator');
		$calc = $calc->result_array();
		foreach ($calc as $cal) {
		echo '<label><input type="radio" text="Turnkey" name="turnkey" id="turnkey" value="'.$cal['skeleton'].'" onchange="GetSelectedVal(this);" class="form-control"><span class="custom-radio-space">Skeleton</span></label>
        <label><input type="radio" text="Turn Key" name="turnkey" id="turnkey" value="'.$cal['turnkey'].'" onchange="GetSelectedVal(this);" class="form-control"><span class="custom-radio-space">TurnKey</span></label><br><b style="color:orange">(Kindly Select Any One Of Construction Type For Making Project Calculations Before Clicking Button)</b>';
		}
		?>
		</div>

		</div>
	<div class="col-sm-9 no-padding cost-left-input-padding">
	<form id="myid" name="myid" method="post">
			<div class="col-sm-5 no-padding">
			<text>Total Build Area(m2)</text>
			</div>
			<div class="col-sm-7 no-padding">
			<div class="form-group">
			<input type="text" name="turnkeyvalue" id="turnkeyvalue" value="" class="number-only required" placeholder="Enter The Value" required>
			</div>
		<button style="margin-bottom: 15px;" type="submit" id="submit" class="btn btn-primary hide-data-button main-hide" onClick="calculateArea2(); return false;">Calulate</button><br>
		</div>
	</form> 		
	</div>	

	</div>
<!-- this-will-be-visible-if-user-fills-the-form -->

<div class="hidebox">
	<div class="row custom-margin-form">
		<div class="col-sm-6 col-xs-6 custom-cost-margin calulates-result">
		<text>Finishing Type</text>
		</div>
		<div class="col-sm-6  col-xs-6 custom-cost-margin calulates-result-generated">
		:<input type="text" value="" class="form-control transparent-field" name="typeresult" id="typeresult">
		</div>
	</div>

		<div class="row custom-margin-form">
			<div class="col-sm-6 col-xs-6 custom-cost-margin calulates-result">
			<text>Total Build Up Area (m2)</text>
			</div>
			<div class="col-sm-6  col-xs-6 custom-cost-margin calulates-result-generated">
			:<input type="text" value="" class="form-control transparent-field" id="arearesult" name="arearesult">
			</div>
		</div>

		<div class="row custom-margin-form">
		<div class="col-sm-6 col-xs-6 custom-cost-margin calulates-result">
		<text>Total Cost</text>
		</div>
		<div class="col-sm-6 col-xs-6 custom-cost-margin calulates-result-generated">
		:<input type="label" value="" class="form-control transparent-field" name="output2">
		</div>
		</div>
		<div class="row custom-margin-form">
		<div class="col-sm-6 col-xs-6 custom-cost-margin calulates-result">
			<button  style="margin-bottom: 15px;" type="submit" class="btn btn-primary hide-data-button" onclick="window.location='http://site.startupbug.net:6999/qatarislamic/home/calculate_view'">Return Back</button>
		</div>
		</div>
</div>	
	
</form>
<!--- ------------------- -->
</div>	
</div>	
</div>	
</section>
<!-- section-calulate-content -->
		<section class="content-heading">
			<div class="container">
				<div class="col-sm-7 text-center">
					<div class="col-sm-offset-1 col-sm-10 text-center">
					<h2>SUBMIT YOUR CONSTRUCTION PROJECT DETAILS</h2>
					</div>
					<div class="col-sm-12 no-padding">
						<p>Qatar Islamic trading & contracting company would love the opportunity to review or quote your upcoming building project. The form here is only a general information collection form to give us an idea of your project so it can be reviewed by the proper personnel</p>
					</div>
				</div>
				<div style="top: -70%;"class="col-sm-5 quote-page-form-top no-padding contact-page-form quote-page-form">
				<h3 style="color:#ca0044">Quote your Project</h3>
					<?php echo form_open_multipart('email/sendEmail') ?>
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

							<div class="form-group">
								<input type="text" class="form-control" name="phone"   placeholder="Phone" pattern="[0-9]{4,}" title="Enter Valide Phone Number" required>
							</div>

				
		
							<div class="form-group">
								 <input type="file" id="file-upload" name="resume-upload" style="display: none;">
                                <label for="file-upload" class="btn form-control file-upload">Upload a file <span><i class="fa fa-cloud-upload" aria-hidden="true"></i></span></label>
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="6" placeholder="Message" name="message" required></textarea>
							</div>
						  <button type="submit" name="send_email" value="send_email" class="btn btn-primary">SEND</button>
					<?php echo form_close();?>
				</div>
				
			</div>
		</section>
		<!-- section-calulate-content-eneded -->
		<section class="main-cost-3col">
			<div class="container max-height">
				<!-- repeat-1 -->
				<div class="col-sm-4 text-center cost-3col">
					<span class="tick-mark"></span>
					<h2 class="pink-md-heading equal-height">Discover theb totalcost of debit</h2>
					<p>We plan and schedule your project with the required resource to complete the client project on time</p>
				</div>
				<!-- repeat-1-ended -->
				<!-- repeat-2 -->
				<div class="col-sm-4 text-center cost-3col">
					<span class="tick-mark"></span>
					<h2 class="pink-md-heading equal-height">free debit assesment and certifiied credit counsellor</h2>
					<p>We plan and schedule your project with the required resource to complete the client project on time</p>
				</div>
				<!-- repeat-2-ended -->
				<!-- repeat-3 -->
				<div class="col-sm-4 text-center cost-3col">
					<span class="tick-mark"></span>
					<h2 class="pink-md-heading equal-height">get controll of your payments now</h2>
					<p>We plan and schedule your project with the required resource to complete the client project on time</p>
				</div>
				<!-- repeat-3-ended -->
			</div>
		</section>
		<!-- section-calulate-content-eneded -->
		<!-- calculate-testimonial -->
		<section class="col-testimonial colored-bg-sec sec-space">
			<div class="container max-height">
				<!-- testimonial-1 -->
				<div class="col-sm-4 text-center">
					<div class="testimonial equal-height">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
					</div>
					<text>John Smith</text>
				</div>
				<!-- testimonial-1-ended -->
				<!-- testimonial-2 -->
				<div class="col-sm-4 text-center">
					<div class="testimonial equal-height">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
					</div>
					<text>John Smith</text>
				</div>
				<!-- testimonial-2-ended -->
				<!-- testimonial-3 -->
				<div class="col-sm-4 text-center">
					<div class="testimonial equal-height">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
					</div>
					<text>John Smith</text>
				</div>
				<!-- testimonial-3-ended -->

			</div>
		</section>
		<!-- calculate-testimonial -->

