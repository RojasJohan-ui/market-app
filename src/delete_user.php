<?php
//step 1 get database connection
require('../config/database.php');
//step 2 get datas or params
$user_id =$_GET['userId'];
//step 3 prepare query 
$sql_delete_users ="delete from users where id = $user_id";
//step 4 Excute query
$result = pg_query($conn_local, $sql_delete_users);
if (!$result){
    die("Error: ".pg_last_error());
}else{
    header('refresh:0;url=list_users.php');
}