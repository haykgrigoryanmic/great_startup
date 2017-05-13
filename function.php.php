<?php

$host= 'localhost';
$user= 'root';
$pass= '';
$db= 'table';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
    echo  'connected successfully to table database';

$sql= "insert into users (id,username,password,email)";
$query=mysqli_query($con,$sql);
if($query)
    echo  'data inserted successfully';
?>