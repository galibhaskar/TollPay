<?php
session_start();
$dbhost='localhost:3307';
$dbuser='root';
$dbpass='';
$dbname='users';
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!isset($_POST['username']))
    header("location:index.php");
if(!isset($_POST['psd']))
    header("location:index.php");
$username=$_POST['username'];
echo $username;
$psd=$_POST['psd'];
echo $psd;
$sql="select * from users where emailid='$username' and Password='$psd'";
$v=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($v);
echo $rowcount;
if($rowcount==1)
{
    $_SESSION['username']=$username;
    $_SESSION['user']=true;
    header("location:uhome.php");
}
header('location: user.php');
?>