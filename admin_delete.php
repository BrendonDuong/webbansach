<?php
	$book_isbn = $_GET['bookisbn'];

	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM books WHERE book_isbn = '$book_isbn'";
	$result = pg_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . pg_error($conn);
		exit;
	}
	header("Location: admin_book.php");
?>