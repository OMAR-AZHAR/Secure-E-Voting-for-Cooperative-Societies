<?php
include 'includes/session.php';

$return = 'home.php';
if (isset($_GET['return'])) {
	$return = $_GET['return'];
}

if (isset($_POST['save'])) {
	$title = $_POST['title'];
	$date = $_POST['date'];
	// $s = "SELECT E_Name FROM election_record";

	// $ss = $conn->query($s);
	// $gettitle = $query->fetch_assoc();
	$file = 'config.ini';
	$content = 'election_title = ' . $title;

	file_put_contents($file, $content);
	$sql = "INSERT INTO election_record(E_Name, E_Date) VALUES ('$title', '$date')"; // Modified by Omar Azhar

	if ($conn->query($sql) === TRUE) {

		$_SESSION['success'] = 'Election title updated successfully';
	}
} else {
	$_SESSION['error'] = "Fill up config form first";
}

header('location: ' . $return);
