<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$position = $_POST['position'];
		$platform = $_POST['platform'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		$filename2 = $_FILES['ESI']['name'];
		if(!empty($filename2)){
			move_uploaded_file($_FILES['ESI']['tmp_name'], '../images/'.$filename2);	
		}
		$filename3 = $_FILES['Docs']['name'];
		if(!empty($filename3)){
			move_uploaded_file($_FILES['Docs']['tmp_name'], '../images/'.$filename3);	
		}

		$sql = "INSERT INTO candidates (position_id, firstname, lastname, photo, ESI, platform, Docs) VALUES ('$position', '$firstname', '$lastname', '$filename', '$filename2', '$platform', '$filename3')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: candidates.php');
?>