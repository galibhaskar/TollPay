<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['admin']))
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
    $sql="select * from tolldata where tid='1'";
    $list=mysqli_query($con,$sql);
    
?>


<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-left">
	<li>
          <a href="#" >TOLLPAY
		  </a>
	</li>
    
      </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="adminpage.php">Home</a></li>
            <li><a href="tolldetails.php">Toll details</a></li>
            <li><a href="addstaff.php">Add staff</a></li>
            <li><a href="staffdetails.php">Staff details</a></li>

            <li><a href="logout.php">logout</a></li>

            
        </ul>
        <ul class="nav navbar-nav navbar-right" style="height:10%;margin:0">
   <marquee>This details must be checked and updated for every 3 months under the confirmation of NHAI(National Highway Authority of India)</marquee>
        </ul>
        </div>

        <form action='updatetoll.php' method='POST'>
        <input type="hidden" name="tid" value="$tid"/>
        <table class="table" >
            <tr>
                <td align='center' class="clr">id</td>
                <td align='center' class="clr">vehicle type</td>
                <td align='center' class="clr">single</td>
                <td align='center' class="clr">return</td>
                <td align='center' class="clr">daily pass</td>
                <td align='center' class="clr">monthly</td>

            </tr>
            
    <?php
    
    while($row = mysqli_fetch_array($list))
    {
        echo "<tr><td align='center'>";
        echo "1";
        echo "</td><td align='center'>";
        echo "Car/Jeep/Van";
        echo "</td><td align='center' name='single'>";
        echo $row["Car/Jeep/Van"]."<br>";
        echo "</td><td align='center'>";
        echo $row["rCar/Jeep/Van"]."<br>";
        echo "</td><td align='center'>";
        echo $row["dCar/Jeep/Van"]."<br>";
        echo "</td><td align='center'>";
        echo $row["mCar/Jeep/Van"]."<br>";
        echo "</td></tr>";
        
        echo "<tr><td align='center'>";
        echo "2";
        echo "</td><td align='center'>";
        echo "LCV";
        echo "</td><td align='center' name='single'>";
        echo $row["LCV"]."<br>";
        echo "</td><td align='center'>";
        echo $row["rLCV"]."<br>";
        echo "</td><td align='center'>";
        echo $row["dLCV"]."<br>";
        echo "</td><td align='center'>";
        echo $row["mLCV"]."<br>";
        echo "</td></tr>";

        echo "<tr><td align='center'>";
        echo "3";
        echo "</td><td align='center'>";
        echo "Bus/Truck";
        echo "</td><td align='center' name='single'>";
        echo $row["Bus/Truck"]."<br>";
        echo "</td><td align='center'>";
        echo $row["rBus/Truck"]."<br>";
        echo "</td><td align='center'>";
        echo $row["dBus/Truck"]."<br>";
        echo "</td><td align='center'>";
        echo $row["mBus/Truck"]."<br>";
        echo "</td></tr>";

        echo "<tr><td align='center'>";
        echo "4";
        echo "</td><td align='center'>";
        echo "upto 3 axle";
        echo "</td><td align='center' name='single'>";
        echo $row["upto 3 axle"]."<br>";
        echo "</td><td align='center'>";
        echo $row["rupto 3 axle"]."<br>";
        echo "</td><td align='center'>";
        echo $row["dupto 3 axle"]."<br>";
        echo "</td><td align='center'>";
        echo $row["mupto 3 axle"]."<br>";
        echo "</td></tr>";

        echo "<tr><td align='center'>";
        echo "5";
        echo "</td><td align='center'>";
        echo "4 to 6 axle";
        echo "</td><td align='center' name='single'>";
        echo $row["4 to 6 axle"]."<br>";
        echo "</td><td align='center'>";
        echo $row["r4 to 6 axle"]."<br>";
        echo "</td><td align='center'>";
        echo $row["d4 to 6 axle"]."<br>";
        echo "</td><td align='center'>";
        echo $row["m4 to 6 axle"]."<br>";
        echo "</td></tr>";

        echo "<tr><td align='center'>";
        echo "6";
        echo "</td><td align='center'>";
        echo "7 or more axle";
        echo "</td><td align='center' name='single'>";
        echo $row["7 or more axle"]."<br>";
        echo "</td><td align='center'>";
        echo $row["r7 or more axle"]."<br>";
        echo "</td><td align='center'>";
        echo $row["d7 or more axle"]."<br>";
        echo "</td><td align='center'>";
        echo $row["m7 or more axle"]."<br>";
        echo "</td></tr>";

        echo "<tr><td align='center'>";
        echo "7";
        echo "</td><td align='center'>";
        echo "HCM/EME";
        echo "</td><td align='center' name='single'>";
        echo $row["HCM/EME"]."<br>";
        echo "</td><td align='center'>";
        echo $row["rHCM/EME"]."<br>";
        echo "</td><td align='center'>";
        echo $row["dHCM/EME"]."<br>";
        echo "</td><td align='center'>";
        echo $row["mHCM/EME"]."<br>";
        echo "</td></tr>";
        
    }
    ?>
    </table><center>
    <input type='submit' value='update' name='view'/>
</center>
</form>
    <html>