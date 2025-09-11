<?php
 //step 1. get data base connection
 require('../config/database.php');
 //step2. get forms database 
 $f_name    = $_POST['fname'];
 $l_name    = $_POST['lname'];
 $m_number  = $_POST['mnumber'];
 $id_number = $_POST['idnumber'];
 $e_mail    = $_POST['email'];
 $p_wd      = $_POST['password'];


 $enc_pass = password_hash($p_wd, PASSWORD_DEFAULT);
 //step 3create query to insert into
 $query="
 INSERT INTO users (
       firstname,
       lastname,
       mobile_number,
       id_number,
       email,
       password
  ) VALUES (
       '$f_name', '$l_name', '$m_number', '$id_number', '$e_mail', '$p_wd'
  )
 ";

 //step 4 Execute query
 $res = pg_query($connection, $query);
 //step 5 valide result
 if($res){
    echo "users has been created successfuly !!!";
 }else {
    echo "something wrong";
 }

 ?>
 
 
 
 
 
 
 
 