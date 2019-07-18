<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['admin']))
{

}
else header('location:main.php');

?>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <style>
        
        .divider-text {
            position: relative;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .divider-text span {
            padding: 7px;
            font-size: 12px;
            position: relative;   
            z-index: 2;
        }
        .divider-text:after {
            content: "";
            position: absolute;
            width: 100%;
            border-bottom: 1px solid #ddd;
            top: 55%;
            left: 0;
            z-index: 1;
        }

        
        #bgimg
        {
            background-image: url("staff.jpg");
            background-position: right;
    background-repeat: no-repeat;
    background-size: cover;
        }
    </style>
</head>


<div class="container-fluid">
    
        <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
            
            <a class="navbar-brand" href="#">TOLLPAY</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-3">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="adminpage.php">Home</a></li>
                <li><a href="tolldetails.php">Toll details</a></li>
                <li><a href="addstaff.php">Add staff</a></li>
                <li><a href="staffdetails.php">Staff details</a></li>

                <li><a href="logout.php">logout</a></li>
                
            </ul>
            
            </div>
        </div>
        </nav>
    </div>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
        <div class="card bg-light" id="bgimg">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Add staff</h4>
            
            <form action="staffentry.php" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="name" class="form-control" placeholder="Full name" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" type="email">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <select class="custom-select" style="max-width: 120px;">
                            <option selected="">+91</option>
                            <option value="1">+92</option>
                            <option value="2">+18</option>
                            <option value="3">+71</option>
                        </select>
                        <input class="form-control" name="phone" placeholder="Phone number" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                        </div>
                        <input name="date" class="form-control" type="date">
                    </div> <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input class="form-control" placeholder="enter state" name="state" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input class="form-control" placeholder="salary" type="number" name="sal">
                    </div> <!-- form-group// -->   
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input class="form-control" placeholder="branch code" type="number" name="bcode">
                    </div> 
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <select class="form-control" name="shift">
                            <option selected="">Select shift</option>
                            <option>Day</option>
                            <option>Night</option>
                            </select>
                    </div> 
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> upload details  </button>
                    </div>      
            </form>
        </article>
        </div> 

</div> 
<br><br>
</article>
</html>