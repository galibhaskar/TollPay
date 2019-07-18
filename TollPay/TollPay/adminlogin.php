<?php
session_start();
if(isset($_SESSION['username']))
{
    if(isset($_SESSION['admin'])) header("location: adminpage.php");
    else header("location: index.php");
}

?>
<html>
    <head>
        <script>
            fun()
            {
                
            }
        
        </script>
        <style>
    .register{
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }
        .register-left{
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }
        .register-left input{
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }
        .register-right{
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }
        .register-left img{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 1s infinite  alternate;
        }
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }
        .register .register-form{
            padding: 10%;
            margin-top: 10%;
        }
        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        .register .nav-tabs{
            margin-top: 3%;
            border: none;
            background: #f0f3f7;
            height: 30px;
            border-radius: 1.2rem;
            width: 8%;
            float: right;
        }
        .register .nav-tabs .nav-link{
            padding: 1%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .register .nav-tabs .nav-link:hover{
            border: none;
        }
        .register .nav-tabs .nav-link.active{
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }
        .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }    
            
            
        </style>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
        



    <form action="adminverify.php" method="POST">
            <div class="container register">
                <div class="row">
                        
                    <div class="col-md-3 register-left">
                            
                                    
                        
                        <img src="http://seekvectorlogo.com/wp-content/uploads/2018/03/toll-group-vector-logo-small.png" alt=""/>
                        <h3>Welcome to TOLLPAY</h3>
                        
                            <input type="button"  value="back" onclick="window.location.href='main.php'"/><br/>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3  class="register-heading">Admin Login</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="username" class="form-control" placeholder="Email *" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="psd" class="form-control" placeholder="Password *" value="" />
                                    </div>
                                    <input type="submit" class="btnRegister" value="login"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab"   role="tab" aria-controls="home" aria-selected="true">admin</a>
                            </li>
                        </ul>
                </div>

        </div>

            </div>
            
        </form>
        </body>
</html>