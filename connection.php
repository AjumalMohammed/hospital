
<!-------query for database connection--->

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hospitaldb";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("connection failed:" . $conn->connect_error);
}
//echo "connected successfully";
?>