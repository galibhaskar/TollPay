<?php
session_start();
$dbhost='localhost:3307';
$dbuser='root';
$dbpass='';
$dbname='users';
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$bid=$_POST['bid'];
$sql="select * from custompay where bid='$bid'";
$v=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($v);
echo "<form action='customverify.php'>";
echo "<input type='submit'  value='back'/>";
if($rowcount==1)
{  
        $sql="update custompay set status='reported' where bid='$bid'";
        mysqli_query($con,$sql);
        echo "<center><h1>Access granted</h1><body style='background: url(https://thumbs.gfycat.com/CourteousPhonyHorsemouse-small.gif);background-repeat:no-repeat;background-position:center top;'></center>";
}
else
    echo "<center><h1>Invalid booking id</h1></center><body style='background: url(https://upload.wikimedia.org/wikipedia/commons/f/f3/AnimatedStop.gif);background-repeat:no-repeat;background-position:center bottom;'>";
echo "</form>";

?>