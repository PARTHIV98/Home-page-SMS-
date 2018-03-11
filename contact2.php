
<!DOCTYPE html>
<html>
<head>
	<title>contact us</title>

	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/contact2.css">

   <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Exo+2|Lobster|Pacifico|Righteous" rel="stylesheet"> 
</head>
<body>
	<?php include 'h.php'?>
	

<div class="container">
	<div class="content-title">
		<h3>GET IN TOUCH WITH US!</h3>
	</div>
	<div class="container2">
				<form action="#" method="POST">
					<div class="col-md-12">
			  			<div class="form-group">
			  				<label for="InputUsername">Your name</label>
					    	<input type="text" class="form-control" id="" placeholder=" Enter Name" autofocus>
				  		</div>
				  		<div class="form-group">
					    	<label for="InputEmail">Email Address</label>
					    	<input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id" pattern=".+@.+..+" required>
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Mobile No.</label>
					    	<input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no." maxlength="10" pattern="[0-9]*$" autofocus>
			  			</div>
			  	
			  		
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
			  			</div>
			  			<div align="center">

			  				<button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
			  			</div>
			  			
					</div>
				</form>
			</div>

</body>
</html>
