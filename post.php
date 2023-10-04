<?php
$p_name = $_POST["name"];
$p_age = $_POST["age"];
$p_address = $_POST["address"];
$p_telephone = $_POST["telephone"];

// get products from db
// 1. connect db
$host = "127.0.0.1";
$dbname = "t2210a_exphp";
$dbuser = "root";
$dbpass = ""; // Xampp: ""   Mamp: "root"

$conn = new mysqli($host,$dbuser,$dbpass,$dbname); // host user pass dbname
if($conn->connect_error){
    die("Connection refused!");
}
// connection succeed
$sql = "insert into students(name,age,address,telephone) values('$p_name','$p_age','$p_address','$p_telephone')";
$conn->query($sql);
header("Location: students.php");