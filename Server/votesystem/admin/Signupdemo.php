	<?php include 'includes/conn.php'; ?>
	<?php include 'includes/header.php'; ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>



	<body style=" background-image: url('../images/header-bg.jpg'); background-size: cover;">

		<div style="min-height: 100vh; padding-top: 0.5%;" id="Signupdemo">
			<div class="container">
				<div style="max-width: 450px; margin: auto; background: #fff; padding: 1%; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2); border-radius: 5px;">
					<b> <a class="fa fa-home" href="http://localhost:3000/" target="_parent"> Home</a></b>
					<div class="col-md-12">
						<h4 style="text-align: center; display: block; width: 100%; font-size: 22px;"><b>SEVCS - VOTER SIGNUP</b></h4>

						<span id="MyClockDisplay" style="font-size: 18px;color:#ef9300;text-align: center; display: block; width: 100%;" class="clock" onload="showTime()"></span>

					</div>
					<div class="row">

						<script type="text/javascript">
							// Validation for form email n password


							function matchpass() {
								var firstpassword = document.f1.password.value;
								var secondpassword = document.f1.password2.value;


								if (firstpassword == secondpassword && secondpassword == firstpassword) {
									return true;
								} else {
									alert("Error, Passwords doesn't Matched!");
									return false;
								}
							}
						</script>
						<script>
							function validateemail() {
								var x = document.f1.email.value;
								var atposition = x.indexOf("@");
								var dotposition = x.lastIndexOf(".");
								if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
									alert("Please enter a valid e-mail address");
									// document.getElementById("emailerror").style.display = "block";
									return false;
								} else {
									return true;
									document.getElementById("emailerror").style.display = "none";
								}
							} // Email and Password Validation Functions end here
						</script>

						<form name="f1" onsubmit="return matchpass() && validateemail()" autocomplete="chrome-off" autocomplete="off" method="POST" action="voters_add.php" enctype="multipart/form-data">

							<div class="form-group">
								<label for="firstname" class="col-md-12 control-label">Firstname</label>

								<div class="col-md-12">
									<input type="text" minlength="3" maxlength="30" pattern="[A-Za-z ]+" title="Name Can't Contain Numbers or Special Characters" placeholder="Firstname" class="form-control" id="firstname" name="firstname" required>


								</div>

							</div>
							<div class="form-group">
								<label for="lastname" class="col-md-12 control-label">Lastname</label>

								<div class="col-md-12">
									<input type="text" minlength="3" maxlength="30" pattern="[A-Za-z ]+" title="LastName Can't Contain Numbers or Special Characters" placeholder="Lastname" class="form-control" id="lastname" name="lastname" required>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-md-12 control-label">Email <i style="color:#ef9300"> (xx11@xx.com)*</i></label>

								<div class="col-md-12">
									<input type="email" placeholder="Email" class="form-control" id="email" name="email" required>
									<!-- <div class="col-md-12" style="color: red; display:none" id="emailerror"> * Please Enter a Valid Email Address </div> -->
								</div>


							</div>
							<div class="form-group">
								<label for="Phone#" class="col-md-12 control-label">Mobile Number# <i style="color:#ef9300"> (03xx-xxxxxxx)*</i></label>

								<div class="col-md-12">
									<input type="tel" class="form-control" maxlength="11" pattern="03[0-9]{2}(?!1234567)(?!1111111)(?!7654321)[0-9]{7}" name="phone" placeholder="phone" required>

								</div>
							</div>
							<div class="form-group">

								<label for="CNIC" class="col-md-12 control-label">CNIC <i style="color:#ef9300"> (1xxxxxxxxxxxx without dashes)* </i></label>

								<div class="col-md-12">
									<input autocomplete="new-password" pattern="(?!0+)\d+" maxlength=13 title="Enter a Valid CNIC" type="tel" placeholder="13 Digit CNIC" class="form-control" id="CNIC" name="CNIC" required>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-12 control-label">Password <i style="color:#ef9300"> (At least one number, uppercase/lowercase letter having 8 or more characters)* </i></label>

								<div class="col-md-12">
									<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" autocomplete="new-password" placeholder="Password" class="form-control" id="password" name="password" required>
								</div>
							</div>
							<div class="form-group">
								<label for="Confirm-password" class="col-md-12 control-label">Confirm Password</label>

								<div class="col-md-12">
									<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" autocomplete="new-password" placeholder="Confirm-Password" class="form-control" id="password2" name="password2" required>
								</div>
							</div>


							<div class="form-group">
								<label for="photo" class="col-md-6 control-label">Photo (Optional)</label>

								<div class="col-md-12">

									<input type="file" accept=".jpg,.jpeg,.png" onclick="valImg();" id="photo" name="photo">
									<script type="text/javascript" src="lib.js">
										function valImg() {
											var fileName = document.getElementById("fileName").value;
											var idxDot = fileName.lastIndexOf(".") + 1;
											var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
											if (extFile == "jpg" || extFile == "jpeg" || extFile == "png") {
												//TO DO
												return true;
												console.log("OK");
											} else {
												return false;
												alert("Only jpg/jpeg and png files are allowed!");
												console.log("Invalid Image");

											}

										}
									</script>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="g-recaptcha" class="form-control" data-sitekey="6LdsTRceAAAAAAWdzig_05Qw2SpT5FUawymoiGU0" required></div>

								</div>
							</div>
					</div>
					<div class="">

						<button type="submit" class="btn btn-primary" style="float: right" name="add"><i class="fa fa-save"></i> SignUp</button><br>
						<a href="http://localhost/SEVCS_II/Server/votesystem/">Already Registered?</a>

						</form>
					</div>
				</div>
			</div>
		</div>



		</div>
		<?php include 'includes/scripts.php'; ?>

		<script>
			function showTime() {
				var date = new Date();
				var h = date.getHours(); // 0 - 23
				var m = date.getMinutes(); // 0 - 59
				var s = date.getSeconds(); // 0 - 59
				var session = "AM";

				if (h == 0) {
					h = 12;
				}

				if (h > 12) {
					h = h - 12;
					session = "PM";
				}

				h = (h < 10) ? "0" + h : h;
				m = (m < 10) ? "0" + m : m;
				s = (s < 10) ? "0" + s : s;

				var time = h + ":" + m + ":" + s + " " + session;
				document.getElementById("MyClockDisplay").innerText = time;
				document.getElementById("MyClockDisplay").textContent = time;

				setTimeout(showTime, 1000);

			}

			showTime();
		</script>


	</body>