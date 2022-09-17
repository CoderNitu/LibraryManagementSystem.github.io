<?php
	require_once 'includes/db-inc.php';
	
	if($_GET['BookId']){
		$bookId = $_GET['BookId'];
		
		$conn->query("DELETE FROM `book` WHERE `BookId` = $bookId") or die(mysqli_errno());
		header("location: book.php");
	}	
?>