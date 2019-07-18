<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['staff']))
{

}
else header('location:main.php');

?>
<html>


<head>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <style>
            .clr
            {
                background-color: #0062cc;
                font-weight:bold;
                color: white;
                width:10%;
            }
            .nav
            {
                margin-top:2%;
                height:20%;
                font-size:150%;
            }
            .navbar-brand { position: relative; z-index: 2; }

            .navbar-nav.navbar-right .btn { position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; }

            .navbar .navbar-collapse { position: relative; }
            .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 22px; }

            .navbar .nav-collapse { position: absolute; z-index: 1; top: 10; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 80px; width: 100%; }
            .navbar.navbar-default .nav-collapse { background-color: #0062cc; }
            .navbar.navbar-inverse .nav-collapse { background-color: #0062cc; }
            .navbar .nav-collapse .navbar-form { border-width: 0; box-shadow: none; }
            .nav-collapse>li { float: right; }

            .btn.btn-circle { border-radius: 50px; }
            .btn.btn-outline { background-color: transparent; }

            @media screen and (max-width: 767px) {
                .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 15px; padding-right: 15px; } 
                
                .navbar .nav-collapse { margin: 7.5px auto; padding: 0; }
                .navbar .nav-collapse .navbar-form { margin: 0; }
                .nav-collapse>li { float: none; }
            }    
            
            .container
            {
                font-weight: bold;
                font-size: 20px;
            }
        </style>
    </head>




<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-left">
	<li>
          <a href="#" >TOLLPAY
		  </a>
	</li>
    
      </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="staffpage.php">Home</a></li>
            <li><a href="customverify.php">customer verification</a></li>
            <li><a href="tollbooks.php">Toll bookings</a></li>
            <li><a href="logout.php">logout</a></li>
            <br>
            
        </ul>
        
        </div>
        <div class="w3-content w3-section" style="margin-left:5%;width:90%;height: 80%">
                            
                            <img class="mySlides" src="home.jpg" style="width:100%">
                            <img class="mySlides" src="download.jpg" style="width:100%">
                          </div>
                          
                          <script>
                          var myIndex = 0;
                          carousel();
                          
                          function carousel() {
                              var i;
                              var x = document.getElementsByClassName("mySlides");
                              for (i = 0; i < x.length; i++) {
                                 x[i].style.display = "none";  
                              }
                              myIndex++;
                              if (myIndex > x.length) {myIndex = 1}    
                              x[myIndex-1].style.display = "block";  
                              setTimeout(carousel, 2000); // Change image every 2 seconds
                          }
                          </script>
</html>