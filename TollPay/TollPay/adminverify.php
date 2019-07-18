<?php
session_start();
if(isset($_SESSION['username']))
{
    header("location: adminpage.php");
}
$dbhost='localhost:3307';
$dbuser='root';
$dbpass='';
$dbname='users';
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$username=$_POST['username'];
$psd=$_POST['psd'];
$sql="select * from admin where username='$username' and password='$psd'";
$v=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($v);
if($rowcount==1)
{
    $_SESSION['username']=$username;
    $_SESSION['admin']=true;
    header("location:adminpage.php");
}
else header("location:adminlogin.php");
?>