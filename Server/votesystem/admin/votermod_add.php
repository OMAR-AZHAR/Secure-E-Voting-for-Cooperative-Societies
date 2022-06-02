<?php
include 'includes/session.php';

if (isset($_POST['add'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$CNIC = $_POST['CNIC'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$filename = $_FILES['photo']['name'];
	if (!empty($filename)) {
		move_uploaded_file($_FILES['photo']['tmp_name'], '../images/' . $filename);
	}
	 $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // for Voters
	
$my_q = "SELECT * FROM voters WHERE CNIC = $CNIC";
$result = mysqli_query($conn, $my_q);
if(mysqli_num_rows($result)> 0){
// If exists then don't insert NIC
$_SESSION['error'] = $conn->error;
 echo " <script>
 alert('CNIC Already Exists!'); </script>
 <h2>....Redirecting back....</h2>
              <script> setTimeout(function () {

	
	   window.open('http://localhost/SEVCS_II/Server/votesystem/admin/voters.php', '_parent');
	   


	},0); </script>
	

 ";
 
 return false;
}
else{

	$voter = $CNIC;

	
		$sql = "INSERT INTO voters (password, firstname, lastname, email, CNIC, photo) VALUES ('$password', '$firstname', '$lastname', '$email' ,'$CNIC', '$filename')";}
	if ($conn->query($sql) ) {
		$_SESSION['success'] = 'Operation Successful ✅';

		echo
		"
            <div class='alert alert-success alert-dismissible'>
           <h1>Voter Created Successfully</h1>
              <script> setTimeout(function () {

	   window.open('http://localhost/SEVCS_II/Server/votesystem/admin/voters.php', '_parent');


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