<?php
$host="localhost";
$userName="root";
$dbpassword="";
$database="RETURNMATE";

//Connection Establish
$connection=mysqli_connect($host,$userName,$dbpassword,$database);
if(!$connection){
    die("Unable to Connect The Database");
}
?>