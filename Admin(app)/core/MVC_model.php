<?php
// echo "yes";
session_start();
$absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/sidemand/Admin";
$header_path = "http://localhost/sidemand/Admin";

// if(!isset($_SESSION['login'])){
//   header("Location: $header_path/Public/Login/");
// }
require "$absolute_path/app/controller/connector_db.php";
require "$absolute_path/app/core/app.php";
require "$absolute_path/app/view/header.php";
?>