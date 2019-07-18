<?php
    $dbhost='localhost:3307';
    $dbuser='root';
    $dbpass='';
    $dbname='users';
    $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $sc=$_POST['singlec'];
    $sl=$_POST['singlel'];
    $s3=$_POST['single3'];
    $s4=$_POST['single4'];
    $s7=$_POST['single7'];
    $sh=$_POST['singleh'];
    $sb=$_POST['singleb'];

    $rc=$_POST['returnc'];
    $rl=$_POST['returnl'];
    $r3=$_POST['return3'];
    $r4=$_POST['return4'];
    $r7=$_POST['return7'];
    $rh=$_POST['returnh'];
    $rb=$_POST['returnb'];

    $dc=$_POST['dailyc'];
    $dl=$_POST['dailyl'];
    $d3=$_POST['daily3'];
    $d4=$_POST['daily4'];
    $d7=$_POST['daily7'];
    $dh=$_POST['dailyh'];
    $db=$_POST['dailyb'];

    $mc=$_POST['monthlyc'];
    $ml=$_POST['monthlyl'];
    $m3=$_POST['monthly3'];
    $m4=$_POST['monthly4'];
    $m7=$_POST['monthly7'];
    $mh=$_POST['monthlyh'];
    $mb=$_POST['monthlyb'];

    $sql="UPDATE `tolldata` SET `Car/Jeep/Van`='$sc',`rCar/Jeep/Van`='$rc',`dCar/Jeep/Van`='$dc',`mCar/Jeep/Van`='$mc',`LCV`='$sl',`rLCV`='$rl',`dLCV`='$dl',`mLCV`='$ml',`Bus/Truck`='$sb',`rBus/Truck`='$rb',`dBus/Truck`='$db',`mBus/Truck`='$mb',`upto 3 axle`='$s3',`rupto 3 axle`='$r3',`dupto 3 axle`='$d3',`mupto 3 axle`='$m3',`4 to 6 axle`='$s4',`r4 to 6 axle`='$r4',`d4 to 6 axle`='$d4',`m4 to 6 axle`='$m4',`7 or more axle`='$s7',`r7 or more axle`='$r7',`d7 or more axle`='$d7',`m7 or more axle`='$m7',`HCM/EME`='$sh',`rHCM/EME`='$rh',`dHCM/EME`='$dh',`mHCM/EME`='$mh'";
    mysqli_query($con,$sql);
    header("location:tolldetails.php");
?>