<?php  

$dbhost ="localhost";
$username = "root";
$email = "fagun115946@gmail.com"
$password = "123456";
$db = "newdb";

 mysql_connect = new mysqli("$dbhost","$email", "$username", "$password", "$dbname");
mysql_select_db(newdb);

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "codeflix";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO signup (name, email, password) 
VALUES ('$name', '$email', '$password_encrypted')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Values have been inserted');
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}


?>