<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script> -->
<?php

session_start();
if (isset($_SESSION['admin'])) {
	header('location: admin/home.php');
}

if (isset($_SESSION['voter'])) {
	header('location: home.php');
}
?>
<?php include 'includes/header.php'; ?>

<body style="overflow-y: hidden; background-image: url('images/header-bg.jpg'); background-size: cover;" class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">

			<b>VOTER SIGN IN</b>

		</div>

		<div class="login-box-body">
			<b> <a class="fa fa-home" href="http://localhost:3000/" target="_parent"> Home</a></b>
			<strong><a href="http://localhost/SEVCS_II/Server/votesystem/admin/" style="float:right;"><i class="fa fa-user"></i> Admins Panel </a> </strong>
			<br><br>
			<b>Login to Vote</b>

			<form autocomplete="off" id="login" action="login.php" method="POST">


				<div class="form-group has-feedback">
					<input autocomplete="new-password" pattern="(?!0+)\d+" maxlength="13" title="Enter a valid 13-digit CNIC"  type="tel" class="form-control" name="voter" placeholder="CNIC" required>
					<!-- <script>
						$(":input").inputmask();
					</script> -->
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

					<strong> <a href="http://localhost/SEVCS_II/Server/votesystem/admin/Signupdemo.php" style="float:right"><i class="fa  fa-user-plus"></i> SIGN UP &nbsp;&nbsp;&nbsp;</a></strong>

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