<?php 
$serverName = "serverName";
$connectionInfo = array ("Database"=>"","CharacterSet"=>"UTF-8");

$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn ) {
     echo "Connection est.<br />";
}else{
     echo "Connection NOT est.<br />";
     die( print_r( sqlsrv_errors(), true));
}

$tsql1 = "INSERT INTO dbo.tracker (name, message)
          VALUES (?,?)";
          
$name = $_POST ["name"];
$message = $_POST ["message"];

$params1 = array(
        array ($name, null),
        array ($message,null)
); 

$result = sqlsrv_query($conn,$tsql1,$params1);

sqlsrv_close($conn);
?>
