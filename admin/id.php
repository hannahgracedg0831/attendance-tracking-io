<?php

session_start();
if(empty($_SESSION['admin_id'])){
	header("location: ../index.php");
    exit;
 }
 include_once('../connection.php');
 if(isset($_GET['id'])){
?>  

<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css" href = "../css/qrcode.css" />

<link rel="shortcut icon" type="image/x-icon" href="../assets/offcampuslogo.png">
	<script src="../js/easy.qrcode.min.js" type="text/javascript" charset="utf-8"></script>

	<style type="text/css">
		.barcode-container{
			display: block;
			float: left;
			width: 230px;
			margin: 5px 1px;
			border: 1px solid black;
		}
		@media print{
			#backbutton-container{
				display: none;
			}
			#printbutton-container{
				display: none;
			}
		}
		.card{
			/*max-width: 23rem;*/
			height:200px;
			width:350px;
		}
		.card-header{
			background-color: #003399;
			color: white;
			border-bottom: 5px solid #ffa31a;
		}
		.front-body{
			background-color: #f2f2f2;
			height: 115px;
			margin:0px;
			padding:1px;
		}
		
		
		.back-body{
			background-color: #f2f2f2;
			height: 125px;
		
		}
		p{
			font-size:9px;	
		}
		.neust{
			font-size:9px;
			font-weight: bold;
		}
		.name{
			font-weight: bold;
			font-family: Serif;
			font-size: 14px;
			margin: 2px;
		}
		.logos{
			max-width:3rem;
			border-radius: 50%;
		}
		.profile{
			height: 100px;
			width: 100px;
			border: 1.5px solid #003399;
			margin-top: 5px;
			margin-left:5px;

		}
		.qr{
			max-width:8rem;
			margin-right:10px; 
		}
		.address{
			text-transform: uppercase;
			font-size: 13px;
			margin-top: -10px;
		}
		.box{
			width: 100px;
		    height: 20px;
		    border: 2px solid black;
		}
		.about{
			font-size: 9px;
			text-align: justify;
 		    text-justify: inter-word;
 		    margin-top: -10px;
		}
		.logo2{
			opacity: 50%;
			max-width: 4rem;
			border-radius: 50%;
		}
		.text{
			font-size: 14px;
			margin: 2px;

		}
		.footer{
			border-top: 5px solid #ffa31a; 
			border-bottom: 10px solid #003399;
		}
		.AY{
			font-size: 15px;
			font-weight: bold; 
		}
		
					
	</style>
		
</head>
<body>
<div id="backbutton-container">	
		<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Go Back</a><hr>
</div>
<?php

	$id = $_GET['id'];
	// echo"$id";
	$sql ='SELECT * FROM tbl_staff  WHERE staff_id = "'.$_GET['id'].'"';
	$query = $con->query($sql);

	while ($row = $query->fetch_assoc()){
	

	$first_name =$row['fname'];
	$middle_name =$row['mname'];
	$last_name =$row['lname'];
	$student_no =$row['staff_id'];
	$position =$row['position'];
	$birthday =$row['dob'];
	$barangay =$row['barangay'];
	$city =$row['city'];
	$province =$row['province'];
	$image =$row['photo'];
	$qrcode =$row['staff_id'];

?>
<div class="row mb-4">
	<div class="col">
		<div class="card border-light">
		  <div class="card-header">
		  	<div class="row">
		  		<div class="col-2">
		  			<img src="logo/main.png" class="logos">
		  		</div>
		  		<div class="col-10">
		  			<p class="mb-0">Republic of the philippines</p>
		  			<p class="mb-0 neust">NUEVA ECIJA UNIVERSITY OF SCIENCE AND TECHNOLOGY</p>
		  			<p class="mb-0">Papaya OFF-campus</p>
		  		</div>	
		  	</div>
		  </div>
		  <div class="card-body text-dark front-body">
		  	<div class="row">
		  		<div class="col-4">
		  			<img class="profile" src="uploads/<?php echo $image.'.jpg'?>">
		  		</div>
		  		<div class="col">
		  			<p class="text"><?php echo $student_no; ?></p>
		  		    <p class="name text-uppercase"><?php echo $first_name . " ".substr($middle_name,0,1).".". " " . $last_name ?></p>
		  		    <p class="text"><?php echo $position; ?>
		  		    <p class="text"><?php echo $birthday; ?></p>
		  		</div>			
		  	</div>
		  </div>
		  <div class="footer"></div>
		</div>
	</div>

	<div class="col">
		<div class="card border-light">
		  <div class="card-header">
		  </div>
		  <div class="card-body text-dark back-body">
		  	<div class="row">
		  		<div class="col-7">
		  		    <div class="address">
		  		      <p class="address"><?php echo $barangay.' '.$city.' '.$province; ?></p>
		  		    </div>
		  		    <div class="row">
		  		    	<div class="col mt-1">
			  		    	<p class="AY">A.Y. <?php echo date("Y"); ?>-<?php echo date("Y")+1; ?></p>
		  		        </div>																																	
		  		    	<p class="about">This card is non-transferable and shall be for the exclusive use of student name herein. It shall be carried and pinned properly at all times when inside the campus.</p>	
		  		    </div>
		  		</div>	
		  		<div class="col-5 mt-3">
		  		    <div class="qr">
					  <div class="col" id="container"> </div>
		  		    </div>
		  		</div>		
		  	</div>
		  </div>
		  <div class="footer"></div>
		</div>
	</div>	
</div>
<?php }?>


<script src="../js/jquery/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/chartsjs/Chart.min.js"></script>
<script src="../js/dashboard-charts.js"></script>
<script src="../js/script.js"></script>


<script type="text/template" id="qrcodeTpl">
	<!-- <div style="width: 5rem; height:10rem; "> -->
		<!-- <div class="imgblock"> -->
			<div class="qr" id="qrcode_{i}">
		
			</div>
			
			<!-- <div class="title">{title}</div>
				<div class="row">
					<div class="col">
						<div class="float-md-start mar"><img src="assets/papaya.png" style="width:60px;hieght:60px;"></div>
					</div>
					<div class="col">
						<div class="float-md-end mar-end"><img src="assets/logo3.jpg" style="width:60px;hieght:60px;"></div>
					</div>		
				</div>
			</div> -->
		<!-- </div><hr> -->
	
	<!-- </div> -->
</script>
		
<script type="text/javascript">
	var demoParams = [
		{
			// title: "Nueva Ecija University of Science and Technology Papaya Off-Campus <br> <h3><font color='black'><strong><?php echo $facility; ?></strong></font></h3>",

	config: {
				text: '<?php echo $qrcode; ?>', // Content

				width: 80, // Widht``
				height: 80, // Height
				colorDark: "#000000", // Dark color
				colorLight: "#ffffff", // Light color
				quietZone: 3,
				quietZoneColor: '#2650AF',

				// === Logo
				//logo: "logo-transparent.png", // LOGO
				logo: "../assets/offcampuslogo.png",
				//ogo:"http://127.0.0.1:8020/easy-qrcodejs/demo/logo.png",  
				// logoWidth:100, 
				// logoHeight:100,

				logoBackgroundColor: '#ffffff', // Logo backgroud color, Invalid when `logBgTransparent` is true; default is '#ffffff'
				logoBackgroundTransparent: false, // Whether use transparent image, default is false
				correctLevel: QRCode.CorrectLevel.H // L, M, Q, H
			}
		}, ]



		var qrcodeTpl = document.getElementById("qrcodeTpl").innerHTML;
		var container = document.getElementById('container');

		for (var i = 0; i < demoParams.length; i++) {
			var qrcodeHTML = qrcodeTpl.replace(/\{title\}/, demoParams[i].title).replace(/{i}/, i);
			container.innerHTML+=qrcodeHTML;
		}
		for (var i = 0; i < demoParams.length; i++) {
				var t =new QRCode(document.getElementById("qrcode_"+i), demoParams[i].config);


	
		}
</script>
<?php
 }
?>
</body>
</html>

