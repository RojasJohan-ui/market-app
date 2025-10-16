<?php
     //step 1. get data base connection
     require('../config/database.php');
     //step2. get forms database 
     $f_name    = trim ($_POST['fname']);
     $l_name    = trim ($_POST['lname']);
     $m_number  = trim($_POST['mnumber']);
     $id_number = trim($_POST['idnumber']);
     $e_mail    = trim($_POST['email']);
     $p_wd      = trim($_POST['password']);


     //$enc_pass = password_hash($p_wd, PASSWORD_DEFAULT);
     $enc_pass =md5($p_wd);

     $check_email = "
     SELECT
          u.email
     FROM 
          users u    
     WHERE 
          email = '$e_mail' 
          LIMIT 1
     ";

     $res_check =  pg_query($connection_supa, $check_email);

     if (pg_num_rows($res_check) > 0){
          echo"<script>alert('User already exits !!')</script>";
          //header('refresh:0;url=singup.html');
          header('refresh:0;url=signin.php');
     } else {
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
               '$f_name', '$l_name', '$m_number', '$id_number', '$e_mail', '$enc_pass'
          )
               ";

          //step 4 Execute query
          $res = pg_query($connection_supa, $query);
          //step 5 valide result
          if($res){
               //echo "users has been created successfuly !!!";
               echo "<script>alert('Success !!! Go to login')</script>";+
               header('refresh:0;url=singup.html');
          }else {
               echo "something wrong";
          }
     }
 ?>
 
 
 
 
 
 
 
 