<?php
$servername="localhost";
$username="root";
$password="";
$database="odss_db";

$con=mysqli_connect($servername,$username,$password,$database);

if(!$con){
    echo "The db is not succefully done because of ".mysqli_connect_error();
}else{
    echo "Successfully connect ";
}
?>