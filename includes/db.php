<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "real_estate_site";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";


$sql = "SELECT test_ID, test_name, testimonial, img FROM testimonial";
$result = mysqli_query($conn, $sql);
?>




