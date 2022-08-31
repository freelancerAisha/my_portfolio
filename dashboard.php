


<?php
include "header.php";

  session_start();

  if  (!isset($_SESSION['is_valid'])){
                header("Location:contact.php");
              }
              
// if(!isset ($_SESSION ['is_valid']) || $_SESSION ['is_valid']!= true){
//       header ('location: login.php');
// }
 
?>

<h1> dashboard</h1>
<b> dashboard  ;
