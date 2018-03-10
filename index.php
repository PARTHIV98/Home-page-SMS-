

<!DOCTYPE html>
<html>
<head>
	<title>Home | SMS</title>
	<?php include 'h.php'?>
	 <meta charset="utf-8">
	 <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Exo+2|Lobster|Pacifico" rel="stylesheet"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/home.css">
</head>
<body>
	<style>
	  .dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #000;
}
	</style>
  

 	<div class="inbg">
 		<div class="container">
                     <div class="row">
                        <div class="col-sm-7 text">
                          <div id=first >
                            <h1>Manage <strong>Maintainance</strong> work of Society.</h1>
                            <div>
                            	<p>
	                            	We have been working very hard to create the new version of page. 
	                            	It comes with a lot of new features, easy to follow videos and images. Check it out soon!
                            	</p>
                            </div>
                          </div>
                            <div id="second">
                            
                            <h1><strong>Forget Password?</strong></h1>
                            <div>
                              <p>
                               We are here for help !!
                                You Have To Be <strong>COOL.:)</strong>
                              </p>
                            </div>
                          </div>
                        </div>
                            
                            
                       
                        
						<div class="col-sm-5 form-box ">
	
                        	<div class="form-top">
                        		<div class="form-top-center">
                        			<h3 align="center">Log in</h3>
                            		 <p align="center"><small>Hello! Sign in with your username or email</small></p>
                        		</div>
                        		
                            </div>
                            <div class="form-bottom ">
			                    <form role="form" action="#" method="POST">
			                    	<div class="form-group" align="center">
			                    		
			                        	<input type="text" name="email" placeholder="Email" class="form-email form-control" id="email">
			                        </div>
			                        <div class="form-group" align="center">
			                        	
			                        	<input type="password" name="password" placeholder="Password" class="form-password form-control" id="psw" onfocus="myFunction()">
			                        </div>
			                      
			                        <div class="checkbox">
          								<label><input type="checkbox" name="remember" ><span class="rm"></span> Remember me</label>
          									<a href="#" id="fp" onclick="myfp()">Forget password?</a>
    
									</div>
									<div class="btnbox" align="center">
										<a href="mn.jpg"><button type="submit" class="btn" id="btnB">SIGN IN</button></a>
									</div>
									<br>
									<div class="social">
								 
								      <p align="center"><span class="or">OR</span></p> <hr><p align="center">Connect Us With:</p>
								    </div>
								    <div class="icons">
								    	<ul>

								            <!-- <li><a href="#"><i class="fab fa-facebook-square"></i></a></li> -->
											<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											<!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
											<li><a href="#"><i class="fab fa-github"></i></a></li>
										</ul>
								    
								    </div>
							<div style="width:70%;margin:auto" align="center"><span class="" style="font-size: 12px; font-weight: normal; text-align: center; transition: opacity 0.2s linear 0s; color: white; width: 224px;font-family: 'Play', sans-serif;">
                                <span>By continuing, you agree to SMS's <a id="tos" href="" target="_blank">Terms of Service</a>, <a id="privacy" href="" target="_blank">Privacy Policy</a></span></span></div>
								 </form>
										                   
						    </div>
					    </div>
					    </div>
		</div>
								            
	 </div>
 </div>
 <script type="text/javascript">
 	function myfp(){
       document.getElementById('second').style.display = 'block';
        document.getElementById('first').style.display = 'none';
  }
 </script>
</body>
</html>