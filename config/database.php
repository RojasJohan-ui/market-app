<?php
//Database conection to superbase
//$supa_host     = "aws-1-us-east-1.pooler.supabase.com"; 
//$supa_user     = "postgres.mfwmttymxnbihuckgizu";
//$supa_dbname   = "postgres";
//$supa_password = "unicesmag@@";
//$supa_port     = "6543";

//Database conection to local service
$local_host     = "127.0.0.1"; //127.0.0.1
$local_user     = "postgres";
$local_dbname   = "marketapp";
$local_password = "unicesmag";
$local_port     = "5432";

//supa_data_connection = "
     #host=$supa_host
     #user=$supa_user
     #dbname=$supa_dbname
     #password=$supa_password
     #port=$supa_port
#";

$local_data_connection = "
     host=$local_host
     user=$local_user
     dbname=$local_dbname
     password=$local_password
     port=$local_port
";

//$connection_supa = pg_connect($supa_data_connection);
$connection_local = pg_connect($local_data_connection);
if($connection_local){
  echo"Error";  
}

else{echo"Connection successfully :::";}
   
?>