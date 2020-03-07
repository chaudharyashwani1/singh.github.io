<?php

if (isset($_POST['Name'])) {
    $Name = $_POST['Name'];
}


if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['Phone'])) {
    $Phone = $_POST['Phone'];
}




$conn= new mysqli("localhost","id12846724_test123","ashwani123","id12846724_test");
if(!$conn){
	echo "not connected";
}
else{
	$stmt= $conn->prepare("insert into test(Name,email,Phone)
	values(?,?,?)");
	$stmt -> bind_param ("ssi", $Name, $email, $Phone);
	$stmt ->execute();
	echo "registration succesfully done";
	$stmt -> close();
	$conn -> close();
}

?>