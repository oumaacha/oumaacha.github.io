<?php
session_start();
require_once('connection.php');
if (isset($_POST['buttonLogin'])) {
	if (empty($_POST['username']) OR empty($_POST['password'])) {
		header('Location:index.php?empty=Please fill in the blanks');
	}
	else{
		$query = "SELECT * FROM users WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
		$reponse = $conn->query($query);
		if ($reponse->fetch_assoc()) {
			$_SESSION['username']=$_POST['username'];
			header('Location:chat.php');
		}
		else{
			header('Location:index.php?invalid=Password or username incorrect !');
		}
	}
}
else{
	echo "not working now";
}