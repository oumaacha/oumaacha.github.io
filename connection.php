<?php
$conn = new mysqli('localhost','root','','chat');
if ($conn->connect_error) {
	die('Erro '.$conn->connect_error);
}
?>