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
        
        </div>

        <form action='modifytoll.php' method='POST'>
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
        
    $sc=$row['Car/Jeep/Van'];
    $sl=$row['LCV'];
    $s3=$row['upto 3 axle'];
    $s4=$row['4 to 6 axle'];
    $s7=$row['7 or more axle'];
    $sh=$row['HCM/EME'];
    $sb=$row['Bus/Truck'];

    $rc=$row['rCar/Jeep/Van'];
    $rl=$row['rLCV'];
    $r3=$row['rupto 3 axle'];
    $r4=$row['r4 to 6 axle'];
    $r7=$row['r7 or more axle'];
    $rh=$row['rHCM/EME'];
    $rb=$row['rBus/Truck'];

    $dc=$row['dCar/Jeep/Van'];
    $dl=$row['dLCV'];
    $d3=$row['dupto 3 axle'];
    $d4=$row['d4 to 6 axle'];
    $d7=$row['d7 or more axle'];
    $dh=$row['dHCM/EME'];
    $db=$row['dBus/Truck'];

    $mc=$row['mCar/Jeep/Van'];
    $ml=$row['mLCV'];
    $m3=$row['mupto 3 axle'];
    $m4=$row['m4 to 6 axle'];
    $m7=$row['m7 or more axle'];
    $mh=$row['mHCM/EME'];
    $mb=$row['mBus/Truck'];
        
        echo "<tr><td align='center'>";
        echo "1";
        echo "</td><td align='center'>";
        echo "Car/Jeep/Van";
        echo "</td><td align='center'>";
        echo "<input type='text' name='singlec' value='$sc'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='returnc' value='$rc'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='dailyc' value='$dc'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='monthlyc' value='$mc'>";
        echo "</td></tr>";
        
        echo "<tr><td align='center'>";
        echo "2";
        echo "</td><td align='center'>";
        echo "LCV";
        echo "</td><td align='center'>";
        echo "<input type='text'  name='singlel' value='$sl'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='returnl' value='$rl'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='dailyl' value='$dl'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='monthlyl' value='$ml'>";
        echo "</td></tr>";

        echo "<tr><td align='center'>";
        echo "3";
        echo "</td><td align='center'>";
        echo "Bus/Truck";
        echo "</td><td align='center' name='single' >";
        echo "<input type='text' name='singleb' value='$sb'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='returnb' value='$rb'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='dailyb' value='$db'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='monthlyb' value='$mb'>";
        echo "</td></tr>";

        echo "<tr><td align='center'>";
        echo "4";
        echo "</td><td align='center'>";
        echo "upto 3 axle";
        echo "</td><td align='center'>";
        echo "<input type='text' name='single3' value='$s3'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='return3' value='$r3'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='daily3' value='$d3'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='monthly3' value='$m3'>";
        echo "</td></tr>";

        echo "<tr><td align='center'>";
        echo "5";
        echo "</td><td align='center'>";
        echo "4 to 6 axle";
        echo "</td><td align='center'>";
        echo "<input type='text' name='single4' value='$s4'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='return4' value='$r4'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='daily4' value='$d4'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='monthly4' value='$m4'>";
        echo "</td></tr>";

        echo "<tr><td align='center'>";
        echo "6";
        echo "</td><td align='center'>";
        echo "7 or more axle";
        echo "</td><td align='center'>";
        echo "<input type='text' name='single7' value='$s7'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='return7' value='$r7'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='daily7' value='$d7'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='monthly7' value='$m7'>";
        echo "</td></tr>";

        echo "<tr><td align='center'>";
        echo "7";
        echo "</td><td align='center'>";
        echo "HCM/EME";
        echo "</td><td align='center'>";
        echo "<input type='text' name='singleh' value='$sh'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='returnh' value='$rh'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='dailyh' value='$dh'>";
        echo "</td><td align='center'>";
        echo "<input type='text' name='monthlyh' value='$mh'>";
        echo "</td></tr>";
        
    }
    ?>
    </table>
    <center>
        <form action="modifytoll.php" method="POST">
            <input type='submit' value='update' name='view'/>
        </form>

    </center>
</form>
</div>
    <html>