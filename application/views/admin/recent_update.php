<html>
<head>
<title>Update Projects</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
	<style type="text/css">
		#container {
		width:622px;
		height:610px;
		margin:50px auto
		}
		#wrapper {
		width:520px;
		padding:0 50px 20px;
		background:linear-gradient(#fff,#AFEBD8);
		border:1px solid #ccc;
		box-shadow:0 0 5px;
		font-family:'Marcellus',serif;
		float:left;
		margin-top:10px
		}
		#menu {
		float:left;
		width:200px;
		margin-top:-30px
		}
		#detail {
		float:left;
		width:320px;
		margin-top:-27px
		}
		a {
		text-decoration:none;
		color:blue
		}
		a:hover {
		color:red
		}
		li {
		padding:4px 0
		}
		h1 {
		text-align:center;
		font-size:28px
		}
		hr {
		border:0;
		border-bottom:1.5px solid #ccc;
		margin-top:-10px;
		margin-bottom:30px
		}
		#hide {
		display:none
		}
		form {
		margin-top:-40px
		}
		label {
		font-size:17px
		}
		input {
		width:100%;
		padding:8px;
		margin:5px 0 15px;
		border:none;
		box-shadow:0 0 5px
		}
		input#submit {
		margin-top:10px;
		font-size:18px;
		background:linear-gradient(#22abe9 5%,#36caf0 100%);
		border:1px solid #0F799E;
		color:#fff;
		font-weight:700;
		cursor:pointer;
		text-shadow:0 1px 0 #13506D
		}
		input#submit:hover {
		background:linear-gradient(#36caf0 5%,#22abe9 100%)
		}
		p {
		font-size:18px;
		font-weight:700;
		color:#18af0b
		}
	</style>

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
</head>

					<body>
							<div id="container">
							<div id="wrapper">
							<h1>Update Projects</h1><hr/>
							<div id="menu">
							<p>Click On Projects For Updating</p>
							<!-- Fetching Names Of All Students From Database -->
							<ol>
							<?php foreach ($project as $Projects): ?>
							<li><a href="<?php echo base_url() . "index.php/admincontroller/show_data_id/" . $Projects->id; ?>">
							<?php echo $Projects->name; ?></a></li>
							<a href="<?php echo base_url() . "index.php/admincontroller/show_data_id/" . $Projects->id; ?>">
							<img src="<?php echo $Projects->imageurl; ?>" style="width: 30%;"/></a>
							<?php endforeach; ?>
							</ol>
							</div>
							<div id="detail">
							<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
							<?php foreach ($single_project as $projects): ?>
							<?php echo form_open_multipart('admincontroller/update_data_id') ?>
							<label id="hide">Id :</label>
							<input type="text" id="hide" name="id" value="<?php echo $projects->id; ?>">
							<label>Image :</label>
							<div class="col-sm-6 form-input-padding-left">
							<div class="form-group">
								<input type="file" id="file-upload1" name="myfile" style="display: none;" value="<?php echo $projects->imageurl; ?>" required>
								<label for="file-upload1" class="btn form-control file-upload rounded" name="myfile"><span class="image"><i class="fa fa-picture-o" aria-hidden="true" ></i></span>Choose File</label>
								</div>
								</div>
							<div class="col-sm-6 form-input-padding-right">
							<div class="form-group">
								<input type="text" class="form-control" name="image_name" placeholder="Name.." value="<?php echo $projects->name; ?>" required>
							</div>
							</div>	
							<div class="col-sm-6 form-input-padding-right">
							<div class="form-group">
								<input type="text" class="form-control" name="image_location" placeholder="Location.." value="<?php echo $projects->location; ?>" required="">
							</div>
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="6" placeholder="Description..." name="image_description" value="<?php echo $projects->description; ?>" required=""></textarea>
							</div>
						  	<button type="submit" id="submit" value="upload" class="btn btn-primary">Update Recent Projects</button>
						<?php echo form_close() ?>
						<?php endforeach; ?>
					</div>
					</div>
					</div>
					</body>
</html>