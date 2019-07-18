<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['admin']))
{

}
else header('location:main.php');

?>
<head>
            <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-left">
	<li>
          <a href="#" >TOLLPAY
		  </a>
	</li>
    
      </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="tolldetails.php">Toll details</a></li>
            <li><a href="addstaff.php">Add staff</a></li>
            <li><a href="staffdetails.php">Staff details</a></li>

            <li><a href="logout.php">logout</a></li>

            
        </ul>
        </div>
<form action='updatetoll.php' method='POST'>
        <input type="hidden" name="tid" value="$tid"/>
        <table class="table" >
            <tr>
                <td align='center' class="clr">id</td>
                <td align='center' class="clr">name</td>
                <td align='center' class="clr">email id</td>
                <td align='center' class="clr">phone</td>
                <td align='center' class="clr">date</td>
                <td align='center' class="clr">state</td>
                <td align='center' class="clr">salary</td>
                <td align='center' class="clr">branch code</td>
                <td align='center' class="clr">shift</td>
            </tr>
            
    <?php
    $dbhost='localhost:3307';
    $dbuser='root';
    $dbpass='';
    $dbname='users';
    $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $sql="select * from staff";
    $list=mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($list))
    {
        echo "<tr><td align='center'>";
        echo $row["sid"];
        echo "</td><td align='center'>";
        echo $row["name"];
        echo "</td><td align='center' name='single'>";
        echo $row["email"]."<br>";
        echo "</td><td align='center'>";
        echo $row["phno"]."<br>";
        echo "</td><td align='center'>";
        echo $row["date"]."<br>";
        echo "</td><td align='center'>";
        echo $row["state"]."<br>";
        echo "</td><td align='center'>";
        echo $row["sal"]."<br>";
        echo "</td><td align='center'>";
        echo $row["bcode"]."<br>";
        echo "</td><td align='center'>";
        echo $row["shift"]."<br>";
        echo "</td></tr>";
    }
    ?>
    </table>
</form>