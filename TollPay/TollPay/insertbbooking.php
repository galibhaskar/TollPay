<?php
    $dbhost='localhost:3307';
    $dbuser='root';
    $dbpass='';
    $dbname='users';
    $tid=$_POST['tid'];
    $vtype=$_POST['vtype'];
    $vno=$_POST['vno'];
    $plan=$_POST['plan'];
    $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $sql="insert into customers values('$bookid','$tid','$vtype','$vno','$plan')";
    mysqli_query($con,$sql);

?>