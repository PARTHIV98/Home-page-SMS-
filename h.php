
 <!-- <link rel="stylesheet" type="text/css" href="styles/home.css"> -->
<style type="text/css">
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
	
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#">SMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Notice Board</a></li>
            <li><a href="#">Remiander(alert)</a></li>
            <li><a href="#">Discussion Form</a></li>
            <li><a href="complaint.php">Complain</a></li>
            <li><a href="#">Event Booking</a></li>
            <li><a href="#">Vendor Management</a></li>
            <li><a href="#">Visitor Management</a></li>
            <li><a href="#">Photo Gallery</a></li>
            <li><a href="#">Document Management</a></li>
 
            <li role="separator" class="divider"></li>
            <li><a href="#">E-services</a></li>
            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">House Status<span class="caret"></span></a>
              <ul class="dropdown-menu">
                                    
                  <li><a href="#">Owner</a></li>
                  <li><a href="#">Renter</a></li>
                                                                      
              </ul>
            </li> -->
              <li class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Member Detail</a>
              <ul class="dropdown-menu">
                                    
                  <li ><a tabindex='-1' href='#'>Owner</a></li>
                  <li><a tabindex='-1' href="#">Renter</a></li>
                                                                      
                </ul>
              </li>
            <li role="separator" class="divider"></li>

              <li class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">E-service</a>
              <ul class="dropdown-menu">
                                    
                  <li><a tabindex='-1' href='#'>Plumber</a></li>
                  <li><a tabindex='-1' href="#">Electrician</a></li>
                  <li><a tabindex='-1' href='#'>Carpenter</a></li>
                                                                      
                </ul>
              </li>
            <li class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">House Status</a>
              <ul class="dropdown-menu">
                                    
                  <li ><a tabindex='-1' href='#'>Owner</a></li>
                  <li><a tabindex='-1' href="#">Renter</a></li>
                                                                      
                </ul>

              </li>
            <li><a href="#">Payment</a></li>
             
          </ul>
        </li>
        <li><a href="#">About us</a></li>
        <li><a href="contact2.php">Contact us</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
