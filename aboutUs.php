<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
		<title>About Us | tourism_management</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
		
		<?php 
		
			if(!isset($_SESSION["username"])) {
				include("common/headerLoggedOut.php");
			}
			else {
				include("common/headerLoggedIn.php");
			}
		
		?>
		
		<div class="spacer">a</div>
		
		<div class="col-sm-12 aboutUsWrapper">
			
			<div class="headingOne">
				
				About Us
				
			</div>
			
			<div class="para">
				<!--dummy description---->
				<h3>why choose us?</h3>
         
        <span> Honest prices : </span> <p> we have the best prices for tours, and a huge selection of destinations will not leave indifferent even avid tourist.
      </p>
      <br>
      <br>
      
         <span> Reliable partners :</span> <p>We work with the best tour operators who over the years have proven their professionalism.
      </p>
      <br>
      <br>
      
         <span> Full Service :</span> <p> Everything that a tourist may need when going abroad, in addition to the ticket.
      </p>
      <br>
      <br>
      
         <span> Quality Guarantee : </span> <p>We do not have to worry about paperwork necessary documents.
      </p>
      <br>
      <br>
      
         <span> Full support :</span><p> contacting us, you get full support, from choosing the tour and ending with advice on what to take with you on a trip.
      </p>
      <br>
      <br>
      
        <span> Document processing : </span> <p> With us you won’t have to worry about processing the necessary documents.
      </p> 
				
			</div>
			
		</div> <!-- paymentWrapper -->
	
	<div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
			
		<?php include("common/footer.php"); ?>
				
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>