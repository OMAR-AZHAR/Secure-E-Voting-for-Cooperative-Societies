<?php
include 'includes/conn.php';
session_start();

if (isset($_SESSION['candidates'])) {
	$sql = "SELECT * FROM candidates WHERE id = '" . $_SESSION['candidates'] . "'";
	$query = $conn->query($sql);
	$voter = $query->fetch_assoc();
} else {
	header('location: http://localhost/SEVCS_II/Server/votesystem/candidate/home.php');
	exit();
}
