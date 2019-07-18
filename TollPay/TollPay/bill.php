<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['user']))
{

}
else header('location:main.php');

?>
<html>


<head>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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



<?php
    $dbhost='localhost:3307';
    $dbuser='root';
    $dbpass='';
    $dbname='users';
    $tid=$_POST['tid'];
    $vtype=$_POST['vtype'];
    $vno=$_POST['veh_no'];
    $plan=$_POST['plan'];
    $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
   
    $sql="select * from tolldata where tid=$tid";
    $list=mysqli_query($con,$sql);
    
    while($row = mysqli_fetch_array($list))
    {
        if($plan=='single')
            $str='';
        else if($plan=='return')
            $str='r';
        else if($plan=='daily')
            $str='d';
        else
            $str='m';

        $str=$str.$vtype;
     
    
    
    
?>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-left">
	<li>
          <a href="#" >TOLLPAY
		  </a>
	</li>
    
      </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="customerpage.php">Home</a></li>
            <li><a href="utolldetails.php">Toll details</a></li>

            <li><a href="logout.php">logout</a></li>
            <br>
            
        </ul>
        
        </div>
<form action='qr.php' method='POST'>
    <input type="text" name="tid" style="display:none;" value="<?php echo $tid; ?>">
    <input type="hidden" name="vno" value="$vno">
        <table class="table" style="margin-left:2%;height:50%;">
            <tr>
                    <td align='center' class='clr'>vehicle number</td>
                    <td name="vno">
                        <?php  echo "$vno";?>
                        <input type="text" name="vno" style="display:none;" value="<?php echo $vno; ?>">

                    </td>
            </tr>
            <tr>
                <td align='center' class="clr">vehicle type</td>
                <td>
                    <?php echo  $vtype."<br>";?>
                    <input type="text" name="vtype" style="display:none;" value="<?php echo $vtype; ?>">
                 </td>
            </tr>
            <tr>
                <td align='center' class="clr">plan</td>
                <td>
                <?php echo $plan;?>
                </td>
            </tr>
            <tr>
                <td align='center' class="clr">cost</td>
                <td>
                <?php echo $row[$str];}?>
                </td>
            </tr>
            <tr>
                <td align='center' class="clr"></td>
                <td>
                <input type='submit' name='submit' value='submit' />
                </td>
            </tr>
    </table>
</form>
</html>