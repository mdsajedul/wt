<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	<link rel="stylesheet" href="/final/project/data/css/cv_css.css">
	<link rel="stylesheet" type="text/css" href="/final/project/data/css/page_style.css">

</head>
<body>

	<div>
		<?php include 'header.php' ?>
	</div>

 <?php require("../controller/action_view_jobseeker.php") ;?>
<div class="card" style="background-color: white">
	<div class="cvHeader">
		<div class="containerText">
			<h3>View Resume</h3>
		</div>
	</div>

	<div class="cvNotice">
		<div class="cvNoticeContainer">
			<p>Here you will get a detailed view of your resume</p>
		</div>
	</div>

	<div class="cvBody">
		<div class="cvContainer">
			<div class="cvHeadInfo">
				<div class="leftHead">
					<h2><?php echo $firstname." ".$lastname ; ?></h2>
				<small>Address : <?php echo $road.",".$subDistrict.",".$district; ?></small> <br/>
				<small>e-mail: <?php echo $email; ?></small>
				</div>

				<div class="image">
				<img src="<?php echo $proImage; ?>"  height="130px" width="130px">
			   </div>

			</div>

			

			<div class="carrerInfo">
				<h3>Career and Application Information:</h3>
				<p>Preferred Job Category :<?php echo  $skill; ?></p>
			</div>

			<div class="personalInfo">
				<h3>Personal Details:</h3>
				<p>Father Name: <?php echo $fathername; ?></p>
				<p>Mother Name: <?php echo $mothername; ?></p>
				<p>Date of Birth: <?php echo $dob; ?> </p>
				<p>Gender: <?php echo $gender; ?></p>
				<p>Marital Status : <?php echo $maratialStatus; ?> </p>
				<p>Religion: <?php echo $religion; ?></p>
				<p>Address: <?php echo $road.",".$subDistrict.",".$district. ",".$divition; ?></p>

			</div>
		</div>
	</div>

</div>

<div>
    <?php include 'footer.php' ?>
  </div>

</body>
</html>