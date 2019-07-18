<?php
session_start();
$dbhost='localhost:3307';
$dbuser='root';
$dbpass='';
$dbname='users';
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$username=$_POST['username'];
$psd=$_POST['psd'];
$sql="select * from users where Username='$username' and Password='$psd'";
$v=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($v);
if($rowcount==1)
{
    $_SESSION['username']=$username;
    $_SESSION['user']=true;
    header("location: uhome.php");
}
else
    header("location: user.php");
?>