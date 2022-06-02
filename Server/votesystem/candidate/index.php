<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
<?php
session_start();
if (isset($_SESSION['candidates'])) {
	header('location:home.php');
}
?>
<?php include 'includes/header.php'; ?>

<body style="overflow-y: hidden; background-image: url('../images/header-bg.jpg'); background-size: cover;" class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<b>For Candidates</b>
		</div>

		<div class="login-box-body">



			<form action="login.php" method="POST">
				<div class="form-group has-feedback">
					<input autocomplete="new-password" pattern="^\d{5}-\d{7}-\d{1}$" title="13 digit CNIC" data-inputmask="'mask': '99999-9999999-9'" type="tel" class="form-control" name="CNIC" placeholder="CNIC" required>
					<script>
						$(":input").inputmask();
					</script>
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