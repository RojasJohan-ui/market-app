<?php
 //step 1. get data base connection
     require('../config/database.php');

     //start or create session
     session_start();

     if(isset($_SESSION['session_user_id'])){
         header('refresh:0;url=main.php');
     }else{
         header('refresh:0;url=error_403.html');
     }

     //step2. get forms database 
     $e_mail    = trim ($_POST['email']);
     $p_wd      = trim($_POST['password']);

     //$enc_pass = password_hash($p_wd, PASSWORD_DEFAULT);
     $enc_pass =md5($p_wd);

     //step3. query to validate data
     $sql_check_user = "
        select 
        u.id
        u.fullname ||''|| u.lastname as fullname
    	u.email,
	    u.password
    from 
    	users u
    where	
	    u.email ='$e_mail' and 
	    u.password ='$enc_pass'
    limit 1	 ";

//step 4 execute query
     $res_check =  pg_query($conn_local, $sql_check_user);
     $row = pg_fetch_assoc($res_check);
     $_SESSION['session_users_id'] = $row['id'];
     $_SESSION['session_users_fullname'] = $row['fullname'];



     if (pg_num_rows($res_check) > 0){
          echo"User exist. Go to main page!!!";+
          header('refresh:0;url=main.php');
     }else{
            echo "Verify Data";
     }     