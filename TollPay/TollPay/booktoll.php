<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['user']))
{

}
else header('location:main.php');

?>
<html>
    <head>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
         
        <style>
            #bgimg
            {
                background-image: url("images.png");
                background-position: right;
                background-repeat: no-repeat;
                background-size: cover;
            }
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
    <body>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-left">
	<li>
          <a href="#" >TOLLPAY
		  </a>
	</li>
    
      </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="tolllist.php">Toll details</a></li>
             
            <li><a href="logout.php">logout</a></li>

        </ul>
    </div>


    <div class="well" >

<?php
   
    $dbhost='localhost:3307';
    $dbuser='root';
    $dbpass='';
    $dbname='users';
    if(!isset($_GET['tid'])) header("location:uhome.php");
    $tid=$_GET['tid'];
    $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    $sql="select * from tolldata where tid=$tid";
    $list=mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($list))
    {
?>
    
    <form action='bill.php' method='POST'>
    <input type="text" name="tid" style="display:none;" value="<?php echo $tid; ?>">
        <table class="table" >
            <tr><td align='center' class="clr">Branch no</td><td>
           <?php echo  $row['tid'];?>
           <input type='text' name='tid' value="<?php echo $row['tid'];?>" style="display:none">
            <br></td>
    </tr><tr><td align='center' class="clr">state</td><td>
    <?php
    echo $row["state"]."<br>";
    echo "</tr><tr><td align='center' class='clr'>toll name</td><td>";
    echo $row["tollname"]."<br>";
    echo "</tr><tr><td align='center' class='clr'>city</td><td>";
    echo $row["city"]."<br>";
    ?>
    </tr><tr><td align='center' class='clr'>vehicle type</td>
    <td align='center'><select  name="vtype"><option>Car/Jeep/Van</option>
    <option>LCV</option>
    <option>Bus/Truck</option>
    <option>upto 3 axle</option>
    <option>4 to 6 axle</option>
    <option>7 or more axle</option>
    <option>HCM/EME</option></select></td></tr>
    </tr><tr><td align='center' class='clr' >plan</td>
    <td align='center'><select name="plan"><option>single</option>
    <option>return</option>
    <option>daily</option>
    <option>monthly</option>
    <select></td></tr>
    </tr><tr><td align='center' class='clr'>vehicle number</td><td>
    <input type='text' maxlength='12' name='veh_no' placeholder='vehicle no' />
    </td></tr>
    </tr><tr><td align='center'></td><td>
    <input type='submit' name='submit' value='submit' />
    </td></tr></table></form>
 
 <?php
 }

?>
</html>