<?php

session_start();
if($_SESSION['uid']==''){
header('location: index.php');
echo"please login";
}

 ?>
