<?php include_once 'connection.php'; 
if(isset($_GET['id'])){
	$id= $_GET['id'];

	$sql ='SELECT * FROM tbl_visitor  WHERE visitor_id = "'.$_GET['id'].'"';
	$query = $con->query($sql);

	while ($row = $query->fetch_assoc()){
		$visitorId = $row['visitor_id'];
		$facility = $row['facility'];


    // $id= $_GET['id'];
    ?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NEUST Papaya Off-Campus</title>
    <link href="css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="css/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/master.css" rel="stylesheet">
    <link href="css/flagiconcss/flag-icon.min.css" rel="stylesheet">

	<link rel = "stylesheet" type = "text/css" href = "css/qrcode.css" />


	<link rel="shortcut icon" type="image/x-icon" href="assets/offcampuslogo.png">
	<script src="js/easy.qrcode.min.js" type="text/javascript" charset="utf-8"></script>
	

	
	<style type="text/css">
		@media screen {
			.printimage {
			     display: none;
			}

		}
		@media print {
			.printimage {
			    display: block;
			}
			.navbar {
				display: none;
			}
			.hide {
				display: none;
			}
		
		}
		label{
			font-size:12px;
			margin-top:-30px;
		}
		hr{
			margin-bottom:0px;
		}
		label{
			margin-bottom:15px;
		}
		.f{
			margin-right:25px;
		}
	</style>
</head>

<body>
	<div class="wrapper">
	<div class="content">
<div class="card" style="width: 20rem;">
  <div class="card-body">

								
							<form method="POST" action="../process/add-facultystaff.php" autocomplete="off">  
							<div style="margin-right:15%">
							<img src="assets/visit.png" width="120%" height="170%"/>  
							</div>
							
									<div class="modal-body">
								
										<div class="col-md-12">
										<center>
											
											<label><u>Visitor ID:<?php echo "$id";?></u></label><br>
									

											<hr><label>Name</label>
										
									
											<hr><label>Contact</label>
								
									
										<div class="form-group">
											<hr><label>Address</label>
										</div>
										</center>

									
										<div class="row">
											<div class="col" id="container">
											 <div class="f"><center><b> 

											 <?php
										
								echo "$facility";
								?></center></b></div>
											 
									
											</div>
								

										
											<div class="col" style="">
												<hr><label>Facilitator Signature</label>
											</div>
										</div>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
					<center>
					
						<div class="card-body">
						
							<div class="row">
								<div class="col-md-12">
									
									<div id="container">
								
									</div>
							
								</div>
								
							</div>

						</div>
					</center>   
                </div>
            </div>
        </div>
	</div>

	<div class="hide">
			<a href="JavaScript:window.print();" class="btn btn-warning"><b>Print</b></a>
			<a href="admin/main-generateQR.php" class="btn btn-danger"><b>Exit</b></a>
		</div>
</body>
</html>


<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/chartsjs/Chart.min.js"></script>
<script src="js/dashboard-charts.js"></script>
<script src="js/script.js"></script>


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
			title: "Nueva Ecija University of Science and Technology Papaya Off-Campus <br> <h3><font color='black'><strong><?php echo $facility; ?></strong></font></h3>",

	config: {
				text: '<?php echo $visitorId; ?>', // Content

				width: 80, // Widht``
				height: 80, // Height
				colorDark: "#000000", // Dark color
				colorLight: "#ffffff", // Light color
				quietZone: 3,
				quietZoneColor: '#2650AF',

				// === Logo
				//logo: "logo-transparent.png", // LOGO
				logo: "assets/offcampuslogo.png",
				//ogo:"http://127.0.0.1:8020/easy-qrcodejs/demo/logo.png",  
				// logoWidth:100, 
				// logoHeight:100,

				logoBackgroundColor: '#ffffff', // Logo backgroud color, Invalid when `logBgTransparent` is true; default is '#ffffff'
				logoBackgroundTransparent: false, // Whether use transparent image, default is false
				correctLevel: QRCode.CorrectLevel.H // L, M, Q, H
			}
		}, ]

<?php } ?>

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


