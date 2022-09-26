<?php
$SERVER = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'zalegram';

$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);

if($conn){
    echo "Database connected successfully";
}
else{
    echo "Error occued";
}
?>