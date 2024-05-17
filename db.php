<?php
$DB_HOST=$_ENV["roundhouse.proxy.rlwy.net"];
$DB_USER=$_ENV["root"];
$DB_PASSWORD=$_ENV["YNCLLTwChFjiZWPrLnCcdcXLXuBhqQuM"];
$DB_NAME=$_ENV["railway"];
$DB_PORT=$_ENV["31415"];


$conexion=mysqli_connect("$roundhouse.proxy.rlwy.net","$root","$YNCLLTwChFjiZWPrLnCcdcXLXuBhqQuM","$railway","$31415")or die("error conexion");
?>
<!--  -->
