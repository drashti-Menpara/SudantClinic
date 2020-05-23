<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2  col-md-6">
							<div class="single-footer-widget">
								<h6>&nbsp;</h6>
								<ul class="footer-nav">
									<li><a href="#">Address</a></li>
									<li><a href="#">- </a></li>
									<li><a href="#">Contact</a></li>
									</ul>
							</div>
						</div>
						<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h2 class="mb-20"><font color="white" >Contact Us</font></h2>
								<p>
									Shri Krushman Co. Op. Housing Society,Block No.05
									Babariya Main Road,Near By Shri Ashapura Electronics 
									Rajkot-360002
								</p>
								<h3>+91 6353624789</h3>
								</div>
						</div>							
						<div class="col-lg-6  col-md-12">
							<div class="container">
  
  <br>
  <form action="index.php" class="was-validated" method="POST">
  	
  
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
     
    
    
      <label for="pwd">Descripion:</label>
      <textarea col="3" row="20" class="form-control" id="pwd" name="desc" placeholder="write your feedback here"></textarea> 
      
   
  
   
    <br>	
    <button type="submit" value="submit" name="submit" class="btn btn-primary">Send feedback</button>
	
	

  </form>
  <?php 
	$conn=mysqli_connect('localhost','root','','clinic');
	if(!$conn){
		die('Could not Connect My Sql:' .mysql_error());
	}
	
	
	
	if(isset($_POST['submit']))
	{	 
	 $name = $_POST['uname'];
	 $desc = $_POST['desc'];
	 
	
	 $sql = "INSERT INTO feedback (name,description)
	 VALUES ('$name','$desc')";
	 if (mysqli_query($conn, $sql)) {
		 $msg="Your feedback is sent";
		echo "<script type='text/javascript'>alert('$msg');</script>";
		}
	 else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	}
	?>
</div>


							
						</div>					
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
					<p class="col-lg-2 col-sm-2 footer-text m-0">
					</p>
						<p class="col-lg-10 col-sm-10 footer-text " style="padding-bottom:0px;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						This Site is Develop By  <b>Drashti Menpara</b>  And <b>Keyur Somaiya</b> in <script>document.write(new Date().getFullYear());</script> </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						
					</div>
				</div>
			</footer>
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>			
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	