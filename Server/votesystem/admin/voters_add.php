<?php
include 'includes/session.php';

if (isset($_POST['add'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$CNIC = $_POST['CNIC'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	//$voters_id = password_hash($_POST['id'],PASSWORD_DEFAULT);
	$filename = $_FILES['photo']['name'];
	if (!empty($filename)) {
		move_uploaded_file($_FILES['photo']['tmp_name'], '../images/' . $filename);
	}
	 $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // for Voters
	
// Check if CNIC already exists in database

$result = mysqli_query($conn, "SELECT * FROM voters WHERE CNIC = '$CNIC'");
$num_rows = mysqli_num_rows($result);
if(($num_rows) > 0){
// If exists then don't insert NIC
$_SESSION['error'] = $conn->error;

 echo " <script>
 alert('CNIC Already Exists!'); </script>
 <h2>....Redirecting back....</h2>
              <script> setTimeout(function () {

	  window.open('http://localhost/SEVCS_II/Server/votesystem/admin/Signupdemo.php', '_parent');
	  // location.reload();


	},0); </script>
	

 ";
 
 return false;
}
else{

// if it doesn't exist then insert it
	$voter = $CNIC;
$sql = "INSERT INTO voters (password, firstname, lastname, email, Phone, CNIC, photo) VALUES ('$password', '$firstname', '$lastname', '$email','$phone','$CNIC', '$filename')";}
	if ($conn->query($sql) ) {
		$_SESSION['success'] = 'Operation Successful ✅';

		echo
		"
            <div class='alert alert-success alert-dismissible'>
           <h1>Voter Created Successfully</h1>
              <script> setTimeout(function () {

	   window.open('http://localhost/SEVCS_II/Server/votesystem/index.php', '_parent');


	},500); </script>
           
		
            </div>
          ";
		
	
		unset($_SESSION['success']);
	} else {
		$_SESSION['error'] = $conn->error;
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
	unset($_SESSION['error']);

}