<?php
$DB_HOST=$_ENV["roundhouse.proxy.rlwy.net"];
$DB_USER=$_ENV["root"];
$DB_PASSWORD=$_ENV["YNCLLTwChFjiZWPrLnCcdcXLXuBhqQuM"];
$DB_NAME=$_ENV["railway"];
$DB_PORT=$_ENV["31415"];


$conexion=mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME","$DB_PORT")or die("error conexion");
?>
<!--  -->
