<?php
require_once "login.php";

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}else{
    echo "Connection succeeded";
    
}