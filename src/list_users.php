<?php
   //Step 1. get database connection
   require('../config/database.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>marketapp list users</title>

</head>
<body>
    <table border ="1" align="center" class="table">
<tr>
<td> fullname</td>
<td> E-mail</td>
 <td>id.Number</td>
 <td>mobile Number</td>  
 <td> Status</td> 
 <td> Options</td> 
</tr>
<?php
$sql_users="
select u.firstname||''||u.lastname as fullname,
u.email,
u.ide_number,
u.mobile_number,
case 
	when u.status =true then 'Active'else 'Inactive'
	end as status
from users u 
";
$resul=pg_query($local_connection,$sql_users);
if(!$resul){
    die("ERROR".pg_last_error());
}
while($row =pg_fetch_assoc($resul)){
  echo"
  <tr>
<td>".$row['fullname']."</td>
<td> camilo@gmail.com</td>
 <td>3333333333</td>
 <td>111111111</td>  
 <td> Active</td> 
 <td> 
<a href='#'><img src= 'icons/lupa.png'width='20'></a>
<a href='#'><img src= 'icons/.png'width='20'></a>
<a href='#'><img src= 'icons/update.png'width='20'></a>
 </td> 
</tr> 
  " ; 
}

?>

</table>
</body>