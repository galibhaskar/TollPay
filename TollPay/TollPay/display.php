<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['staff']))
{

}
else header('location:main.php');

?>
<head>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
            .clr
            {
                background-color: #0062cc;
                font-weight:bold;
                color: white;
                width:20%;
                
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



<?php
    
    $dbhost='localhost:3307';
    $dbuser='root';
    $dbpass='';
    $dbname='users';
    $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $tid=$_GET['tid'];
    $sql="select * from custompay where tid=$tid"; 
    $list=mysqli_query($con,$sql);
        echo "<table class='table' align='center'>";
        echo "<tr bgcolor=gray><td align='center' class='clr'>Bookingid</td><td align='center' class='clr'>type</td><td align='center' class='clr'>Vehicle no</td><td align='center' class='clr'>status</td></tr>";
        while($row = mysqli_fetch_array($list))
        {
            echo "<tr><td align='center' name='tid'>";
            echo $row["bid"]."<br>";
            
            echo "</td><td align='center'>";
            echo $row["type"]."<br>";
            echo "</td><td align='center'>";
            echo $row["vno"]."<br>";
            echo "</td><td align='center'>";
            echo $row["status"]."<br></td>";
            echo "</td></tr>";
        }


        ?>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav navbar-left">
            <li>
                <a href="#" >TOLLPAY
                </a>
            </li>
            
            </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="customerpage.php">Home</a></li>
                    <li><a href="customverify.php">customer verification</a></li>
                    <li><a href="tollbooks.php">Toll bookings</a></li>
                    <li><a href="logout.php">logout</a></li>
                    <br>
                    
                </ul>
                
                </div>
        <div>
        <center>
            <label>Toll ID:</label>
            <?php echo "$tid"; ?>
            
        </center>
        </div>