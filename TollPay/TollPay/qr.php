

<?php

function generate_code($no_of_codes,$exclude_codes_array='',$code_length = 4)
{
    $characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 
    $promotion_codes = array();
    for($j = 0 ; $j < $no_of_codes; $j++)
    {
        $code = ""; 
        for ($i = 0; $i < $code_length; $i++) 
        {
            $code .= $characters[mt_rand(0, strlen($characters)-1)];
        }
         
        if(!in_array($code,$promotion_codes))
        {
            if(is_array($exclude_codes_array))
            {
                if(!in_array($code,$exclude_codes_array))
                {
                    $promotion_codes[$j] = $code;
                }
                else
                {
                    $j--;       
                }   
            }   
            else
            {
                $promotion_codes[$j] = $code;
            }
        }
        else
        {
            $j--;   
        }
    }
    return $promotion_codes;    
}
$list=generate_code(1,'',10);



session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['user']))
{

}
else header('location:main.php');



    $dbhost='localhost:3307';
    $dbuser='root';
    $dbpass='';
    $dbname='users';
    $vtype=$_POST['vtype'];
    $vno=$_POST['vno'];
    $tid=$_POST['tid'];
    $id=$list[0];
    $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $sql="insert into custompay values('$id','$tid','$vtype','$vno','Not reported')";
    mysqli_query($con,$sql);
    

?>
<head>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
         
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
    

<center>
<h1>your booking id is 
<?php
          echo $id;
?>
</h1>
<div id='qrimage'>
        </div>
        <h1>
please scan this qr code for your booking details
        </h1><center>
<script>
k="<img src='https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl="+encodeURIComponent('<?php echo $id; ?>')+"'>"
console.log(k);
document.getElementById('qrimage').innerHTML=k;
</script>
