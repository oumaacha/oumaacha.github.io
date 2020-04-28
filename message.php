<?php
	session_start();
	if(isset($_POST['envoyer'])) {
		if (!empty($_POST['msg'])) {
			require_once('connection.php');
			$query="INSERT INTO messages (person,msg) values('".$_SESSION['username']."','".$_POST['msg']."')";
			$conn->query($query);
			header('location:chat.php');
		}
		else{
			header('location:chat.php?emptyMsg');
		}
	}
	else{
		header('location:chat.php');
	}
?>