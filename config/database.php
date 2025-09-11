<?php
//Database conection 
$host     ="localhost"; //127.0.0.1
$user     = "postgres";
$dbname   = "marketapp";
$password = "unicesmag";
$port     = "5432";

$data_connection = "
     host=$host
     user=$user
     dbname=$dbname
     password=$password
     port=$port
";

$connection =pg_connect($data_connection);

if(!$connection){
  echo"Error";  
}
    
else{echo"Connection successfully :::";}
   









?>