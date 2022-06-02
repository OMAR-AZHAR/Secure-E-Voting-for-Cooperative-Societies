<?php
session_start();
include 'includes/conn.php';

if (isset($_POST['login'])) {
	$CNIC = $_POST['CNIC'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM candidates WHERE CNIC = '$CNIC'";
	$query = $conn->query($sql);

	if ($query->num_rows < 1) {
		$_SESSION['error'] = 'Cannot find Candidate account with the CNIC';
	} else {
		$row = $query->fetch_assoc();
		if (password_verify($password, $row['password'])) {
			$_SESSION['candidates'] = $row['id'];
		} else {
			$_SESSION['error'] = 'Incorrect password';
		}
	}
} else {
	$_SESSION['error'] = 'Input Candidate credentials first';
}

header('location: index.php');
