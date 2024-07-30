<?php 
$userneme =$_POST['username'];
$Email =$_POST['Email'];
$password =$_POST['password'];


//database connection
$conn = mysql_connec('localhost','root','','test');
if($conn->connct_error){
	die('connection Failed: ' . $conn->conn_errno);
}
else{
$stmt=$conn->prepare("insert into registration(username,email,password") values($username,$email,$password);");
$stmt->bind_param("sssi",$username,$emsil,$password);
$stmt->execute();
echo" Registration successfully added...";
$stmt->close();
$conn->close();
}