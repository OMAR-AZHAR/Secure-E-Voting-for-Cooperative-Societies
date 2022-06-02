<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename3 = $_FILES['Docs']['name'];
		if(!empty($filename3)){
			move_uploaded_file($_FILES['Docs']['tmp_name'], '../images/'.$filename3);	
		}
		
		$sql = "UPDATE candidates SET Docs = '$filename3' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate Documents updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select candidate to update Docs first';
	}

	header('location: candidates.php');
?>