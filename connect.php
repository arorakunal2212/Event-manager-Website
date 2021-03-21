<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="database123";


//database connection
$conn=mysqli_connect($servername,$username,$password,$database_name);
if (!$conn) {
	die("Connection Failed :". mysqli_connect_error());
}if(isset($_POST['save']))
{
$name=$_POST['name'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$Password=$_POST['Password'];
	$sql_query = "INSERT INTO entery_details (name, lname, gender, phone, email, password) 
		values('$name, $lname', '$gender', $phone', '$email', '$password')");
if (mysqli_query($conn, $sql_query))
{
	echo "New Details Entey Inserted successfully !";
}
else
{
	echo "Error! " . $sql . "" . mysqli_error($conn);

}
mysqli_close($conn);
	
}
?>
