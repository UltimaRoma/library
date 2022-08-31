<?php

$connect = mysqli_connect('127.0.0.1', 'boss', 'ave3', 'library');

if ($connect == false){
	echo 'NO CONNECT TO DB'<br>;
	echo "mysqli_connect_error()";
	die();
}

//include ('librarydb.php');