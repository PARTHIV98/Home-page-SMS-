<!DOCTYPE html>
<html>
<head>
  <?php

  include "h.php";
  ?>
    <title>Complaint</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/lgn.css">
</head>
<body>
	
    <style type="text/css">
    body{
      background: -webkit-linear-gradient(to left,#00d9bf, #00d977);/* #3a6186  #89253e Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #00d9bf, #00d977); /* #3a6186 , #89253e  W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
        .cont{
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            position: absolute;
            
            border-radius: 6px;
            padding:100px; 
           
        }
        .btn ,input[type="text"],textarea{
            margin-bottom: 15px;
            margin-top: 15px;
        }
        .btn{
            width: 100%;
            font-size: 16px;
           
    
        }
         .icn{
            padding-right:4px;
            padding-top: 3px; 
            font-size: 20px;
        }

        h2{
            margin-top: -50px;
            color: white;
        }

        .cnm{
          display: none;
        }


       
    </style>
   
     <div class="row">
    <div class="col-lg-10">
      <ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Current</a></li>
  <li role="presentation" onclick="func()"><a href="#"  ><span class="basic-addon" >+</span>New</a></li>
  
</ul>
</div>
<div class="container cnm" id="new">
	<div class="row container cont">
		<center><h2>Complains</h2></center>
  
        
       <!--  <div class="col-md-4">
            <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12 row" style="padding:0px;margin-bottom:10px;">
                            
                            <div class="col-md-2">
                                <img src="http://dinus.org/img/fakultas/FIK/cs/cs.svg">
                                <div style="margin-left:30px;">
                                    <img src="http://dinus.org/img/fakultas/FIK/cs/cs.png" width="70px" height="70px" class="img-circle" style="border:3px solid #052C52;">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <hr>
                                <p style="padding-left:55px;font-size:1.3em;"><strong>Zaskia Amanda</strong></p>
                                
                            </div>
                            
                            
                        </div> -->
<div class="con2">
                        <form>
                           
                               
                           <div class="ipt">
                                        <input class="form-control" type="text" placeholder="Subject">
                                       <textarea class="form-control" rows="4" cols="5" placeholder="Message text . . ."></textarea>
                                        
                                        </div>

                                        <button class="btn btn-danger btn-sm"><i class="fas fa-envelope icn" ></i>Send</button>
                                                </form>
               </div>
</div>
<script type="text/javascript">
  function func(){
       document.getElementById('new').style.display = 'block';
  }
</script>
</body>
</html>
