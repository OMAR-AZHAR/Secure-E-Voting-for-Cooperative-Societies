<?php
include 'includes/session.php';

$return = 'home.php';
if (isset($_GET['return'])) {
	$return = $_GET['return'];
}

if (isset($_POST['save'])) {
	
	$title = $_POST['title'];
	$date = $_POST['date'];
	$date2=$_POST['end_date'];
	
	
	
	$file = 'config.ini';
	$content = 'election_title = ' . $title;

	file_put_contents($file, $content);
	date_default_timezone_set('Asia/Karachi');
	$da=date('Y-m-d H:i', time());
	$now = (new DateTime($da))->format('Y-m-d H:i');
    $start_date = (new DateTime($date))->format('Y-m-d H:i');
	$end_date = (new DateTime($date2))->format('Y-m-d H:i');
	if($start_date <= $end_date && !($start_date < $now)){
	$sql = "INSERT INTO election_record(E_Name, Start_Date, End_Date) VALUES ('$title', '$start_date','$end_date' )"; // Modified by Omar Azhar
	}
	else{
		$_SESSION['error'] = $conn->error;
		
		echo " <script>
		alert('Error! Invalid Date and Time'); </script>
		<h2>....Redirecting back....</h2>
					 <script> setTimeout(function () {
	   
			  window.open('http://localhost/SEVCS_II/Server/votesystem/admin/home.php', '_parent');
			 // location.reload();
	   
	   
		   },0); </script>
		   
	   
		";
		return false;
	}
	if ($conn->query($sql) === TRUE) {

		$_SESSION['success'] = 'Election title updated successfully';
	}
} else {
	$_SESSION['error'] = "Fill up config form first";
}

header('location: ' . $return);
