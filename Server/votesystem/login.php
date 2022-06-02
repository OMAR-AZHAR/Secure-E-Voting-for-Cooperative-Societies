<?php
session_start();
include 'includes/conn.php';

date_default_timezone_set('Asia/Karachi');

$now2 = date('Y-m-d H:i', time());

$now1 = (new DateTime($now2))->format('Y-m-d H:i');

$t = "SELECT Start_Date, End_Date FROM election_record WHERE Election_ID =(SELECT max(Election_ID) FROM election_record);";
$result = $conn->query($t);

while ($row = mysqli_fetch_array($result)) {

	$start = date("Y-m-d H:i ", strtotime($row['Start_Date']));
	$endtime = date("Y-m-d H:i ", strtotime($row['End_Date']));
}

if ($endtime == $now1 || $endtime < $now1) { // after many many tries; this condition worked; THANKS GOD ❤
	echo "....Elections Closed-Redirecting Back....
		
		<script>
		alert('Elections Closed at this Time...!');
		 setTimeout(function () {

				   window.open('http://localhost:3000/', '_parent');
			
			
		 	},10);
		</script>
		";

	session_destroy();
} else {
	if (isset($_POST['login'])) {

		$voter = $_POST['voter'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM voters WHERE CNIC = '$voter'";
		$query = $conn->query($sql);

		if ($query->num_rows < 1) {
			$_SESSION['error'] = 'Cannot find voter with the ID';
		} else {
			$row = $query->fetch_assoc();
			if (password_verify($password, $row['password'])) {
				$_SESSION['voter'] = $row['id'];
			} else {
				$_SESSION['error'] = 'Incorrect password';
			}
		}
	} else {

		$_SESSION['error'] = 'Input voter credentials first';
	}


	echo "<script>
			 setTimeout(function () {

			
	  window.open('http://localhost/SEVCS_II/Server/votesystem/index.php', '_parent');

	},10);
			   </script>

	";
}
