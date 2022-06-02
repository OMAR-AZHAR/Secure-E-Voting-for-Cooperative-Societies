<?php
include 'includes/session.php';

if (isset($_GET['return'])) {
	$return = $_GET['return'];
} else {
	$return = 'home.php';
}

if (isset($_POST['save'])) {
	$curr_password = $_POST['curr_password'];
	$CNIC = $_POST['CNIC'];
	$password = $_POST['password'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$photo = $_FILES['photo']['name'];
	if (password_verify($curr_password, $user['password'])) {
		if (!empty($photo)) {
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/' . $photo);
			$filename = $photo;
		} else {
			$filename = $user['photo'];
		}

		if ($password == $user['password']) {
			$password = $user['password'];
		} else {
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		$sql = "UPDATE candidates SET CNIC = '$CNIC', password = '$password', firstname = '$firstname', lastname = '$lastname', photo = '$filename' WHERE id = '" . $user['id'] . "'";
		if ($conn->query($sql)) {
			$_SESSION['success'] = 'Candidate profile updated successfully';
		} else {
			$_SESSION['error'] = $conn->error;
		}
	} else {
		$_SESSION['error'] = 'Incorrect password';
	}
} else {
	$_SESSION['error'] = 'Fill up required details first';
}

header('location:' . $return);
