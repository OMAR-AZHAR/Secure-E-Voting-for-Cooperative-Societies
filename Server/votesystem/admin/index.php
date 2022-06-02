<?php
session_start();
if (isset($_SESSION['admin'])) {
	// header('location:home.php');
	echo "<script>

			 setTimeout(function () {

	   window.open('http://localhost/SEVCS_II/Server/votesystem/admin/home.php', '_parent');


	},10);
			   </script>

	";
}
?>
<?php include 'includes/header.php'; ?>

<body style="overflow-y: hidden; background-image: url('../images/header-bg.jpg'); background-size: cover;" class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<b>ADMIN-ETA SIGN IN</b>
		</div>

		<div class="login-box-body">
			<b> <a class="fa fa-home" href="http://localhost:3000/" target="_parent"> Home</a></b>
			<strong><a href="http://localhost/SEVCS_II/Server/votesystem/" style="float:right;"><i class="fa  fa-user-plus
"></i> Sign in As Voter </a> </strong>
			<p class="login-box-msg">Welcome to SEVCS</p>


			<form action="login.php" method="POST">
				<div class="form-group has-feedback">
					<input autocomplete="new-password" type="text" class="form-control" name="username" placeholder="Username" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input autocomplete="new-password" type="password" class="form-control" name="password" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
					</div>

					</i></a>
				</div>
		</div>
	</div>
	</form>
	</div>
	<?php
	if (isset($_SESSION['error'])) {
		echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>" . $_SESSION['error'] . "</p> 
			  	</div>
  			";
		unset($_SESSION['error']);
	}
	?>
	</div>

	<?php include 'includes/scripts.php' ?>
</body>

</html>