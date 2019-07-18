<?php
session_start();
$dbhost='localhost:3307';
$dbuser='root';
$dbpass='';
$dbname='users';
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$email=$_POST['email'];
$psd=$_POST['psd'];
//$tid=$_POST['tid'];
$sql="select * from staff where email='$email' and phno='$psd'";
$v=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($v);
if($rowcount==1)
{  
    $_SESSION['username']=$email;
    $_SESSION['staff']=true;
    header("location: staffpage.php");
}
else
    header("location: stafflogin.php");
?>