<?php
session_start();
include 'includes/conn.php';

if (!isset($_SESSION['admin']) || trim($_SESSION['admin']) == '') {
	//	header('location: index.php');
}
// $id = isset($_POST['id']) ? $_POST['id'] : '';

$sql = "SELECT * FROM admin WHERE id = '" . $_SESSION['admin'] . "'";
$query = $conn->query($sql);
$user = $query->fetch_assoc();
