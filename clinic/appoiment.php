
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Doctor Appointment Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!-- /font files -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
<!-- css files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
</head>
<body>
<?php include "header.php" ?>
	<div data-vide-bg="video/patient">
		<div class="center-container">
		<br>
		<br>
			
			
			<div class="content-top">
			<h1 class="header-w3ls"><u>Appointment Form</u></h1><br><br>
				<div class="content-w3ls">
					<div class="form-w3ls">
						<form action="#" method="post">
							<div class="content-wthree1">
								<div class="grid-agileits1">
									<div class="form-control1"> 
										<label class="header">Name <span>*</span></label>
										<input type="text" id="name" name="name" placeholder="Name" title="Please enter your Full Name" required="">
									</div>
									<div class="form-control1">	
										<label class="header">Email <span>*</span></label>
										<input type="email" id="email" name="email" placeholder="Mail@example.com" title="Please enter a Valid Email Address" required="">
									</div>
									<div class="form-control1">	
										<label class="header">Phone Number <span>*</span></label>
										<input type="text" id="name" name="phone_number" placeholder="Phone Number" title="Please enter your Phone Number" required="">
									</div>
									<div class="form-control1">	
										<label class="header">Date Of Appoiment: <span>*</span></label>
										<input type="date" id="name" name="date" placeholder="Phone Number" title="Please enter your Phone Number" required="">
									</div>
								</div>
							</div>
					</div>
					<div class="form-w3ls-1">
						
								<div class="form-control1"> 
									<label class="header">Address <span>*</span></label>
									<input type="text" id="name" name="address" placeholder="Address" title="Please enter your Address" required="">
									<input type="text" id="name"  placeholder="Line" title="Please enter your Line" required="">
									<input type="text" id="name"  placeholder="City" title="Please enter your City" required="">
									<input type="text" id="name"  placeholder="Pin code" title="Please enter your Zip code" required="">
								</div>
								
					</div>
					<div class="clear"></div>
				</div>
				<div class="content-w3ls">
					<div class="form-w3ls">
							<div class="content-wthree2">
								<div class="grid-w3layouts1">
									<div class="w3-agile1">
										<label class="rating">Best time to call you <span>*</span></label>
										<ul>
											<li>
												<input type="radio" id="a-option" name="time" value="Morning">
												<label for="a-option">Morning </label>
												<div class="check"></div>
											</li>
											<li>
												<input type="radio" id="b-option" name="time" value="Afternoon">
												<label for="b-option">Afternoon</label>
												<div class="check"><div class="inside"></div></div>
											</li>
											<li>
												<input type="radio" id="c-option" name="time" value="Evening">
												<label for="c-option">Evening </label>
												<div class="check"><div class="inside"></div></div>
											</li>
										</ul>
									</div>	
								</div>
								
								<div class="clear"></div>
							</div>
					</div>
					<div class="form-w3ls-1">
						<div class="grid-w3layouts1">
							<div class="w3-agile1">
								<label class="rating">I would like to (choose one)<span>*</span></label>
									<ul>
										<li>
											<input type="radio" id="d-option" name="patient" value="A new patient appointment">
											<label for="d-option">A new patient appointment</label>
											<div class="check"></div>
										</li>
										<br>
										<li>
											<input type="radio" id="e-option" name="patient" value="A routine checkup">
											<label for="e-option">A routine checkup</label>
											<div class="check"><div class="inside"></div></div>
										</li>
										
									</ul>
							</div>	
						</div>		
					</div>
					
							
					<div class="clear"></div>
				</div>
				
					<div class="wthreesubmitaits" style="margin-top:30px;margin-left:30px;">
						
									<input type="submit" name="submit" value="Submit">
					</div>
						</form>
			</div>	
				
				
		</div>
	</div>
	<?php 
	$conn=mysqli_connect('localhost','root','','clinic');
	if(!$conn){
		die('Could not Connect My Sql:' .mysql_error());
	}
	
	
	
	if(isset($_POST['submit']))
	{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $phone_number = $_POST['phone_number'];
	 $address = $_POST['address'];
	 $time=$_POST['time'];
	 $patient=$_POST['patient'];
	 $date=$_POST['date'];
	
	 $sql = "INSERT INTO appoiment (Name,Email,MobileNo,Address,Time,Patient,DateAppoiment)
	 VALUES ('$name','$email','$phone_number','$address','$time','$patient','$date')";
	 if (mysqli_query($conn, $sql)) {
		 $msg="Your appoiment is conformed";
		echo "<script type='text/javascript'>alert('$msg');</script>";
		}
	 else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	}
	?>
<?php include "footer.php" ?>
			<!-- End footer Area -->

			

</body>
</html>
