<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename2 = $_FILES['ESI']['name'];
		if(!empty($filename2)){
			move_uploaded_file($_FILES['ESI']['tmp_name'], '../images/'.$filename2);	
		}
		
		$sql = "UPDATE candidates SET ESI = '$filename2' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Election Symbol updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select candidate to update ESI first';
	}

	header('location: candidates.php');
?>