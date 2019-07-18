<?php
$dbhost='localhost:3307';
$dbuser='root';
$dbpass='';
$dbname='users';
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$gen=$_POST['gen'];
$ph=$_POST['phone_no'];
$q=$_POST['que'];
$a=$_POST['ans'];
$email=$_POST['email_id'];
$psd=$_POST['psd'];
$sql="select * from users where email='$email'";
$v=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($v);
if($rowcount==1)
    header("location:main.php");
$sql1="insert into users values('$fname','$lname','$psd','$email',$ph,'$q','$a')";
$a=mysqli_query($con,$sql1);
if($fname=='' || $lname=='' || $email=='' || $psd=='' || $gen=='' || $ph=='' || $q=='' ||$a=='' )
    header("location:register.php");
else
    header("location:tolllist.php");
?>