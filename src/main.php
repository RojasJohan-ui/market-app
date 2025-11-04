<?php
echo "Welcome to main !!";
?>

<?php
  if(!isset($_SESSION['session_user_id'])){
         header('refresh:0;url=singin.html');
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel ="icon" type="image/png" href="src/icons/market_main.png"/>
    <title>Marketapp-Home</title>
</head>
<body>
    <center><b>User:</b>Here print your name</center>
    <a href="list_user.php">List all users</a>
    <a href="logout.php">Logout</a> 
</body>
</html>