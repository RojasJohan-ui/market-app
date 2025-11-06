<?php
  //Star or continue
  session_star();
  //Destroy current session
  session_destroy();
   //redirect to login 
   header('refresh:0;url=singin.html');
   ?>
