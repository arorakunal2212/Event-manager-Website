<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="database123";


//database connection
$conn=mysqli_connect($servername,$username,$password,$database_name);
if (!$conn)
 {
	die("Connection Failed :". mysqli_connect_error());
}
if(isset($_POST['save']))
{
$name=$_POST['name'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
	$sql_query = "INSERT INTO entry_details (name, lname, phone, email, password) 
		VALUES('$name', '$lname', '$phone', '$email', '$password')";
if (mysqli_query($conn, $sql_query))
{
	echo "New Details Inserted successfully !"
	
}
else
{
	echo "Error! " . $sql . "" . mysqli_error($conn);

}
mysqli_close($conn);
	
}
?>
