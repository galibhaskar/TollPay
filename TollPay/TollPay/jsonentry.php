<?php
    $dbhost='localhost:3307';
    $dbuser='root';
    $dbpass='';
    $dbname='toll';
    $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $json=file_get_contents('data.json');
    $data=json_decode($json,true);
    $stmt=$con->prepare("insert into tolldata values(?,?,?,?,?,?)");
    foreach($data as $row)
    {
        $stmt->bindParam(1,$row['Plaza Code']);
        $stmt->bindParam(2,$row['Plaza Type']);
        $stmt->bindParam(3,$row['Plaza City']);
        $stmt->bindParam(4,$row['Plaza State']);
        $stmt->bindParam(5,$row['Concessionaire']);
        $stmt->bindParam(6,$row['Plaza Name']);
        $stmt->execute();
    }
?>