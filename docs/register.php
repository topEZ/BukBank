<?php include "header.php"; ?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">

<link rel="stylesheet" href="../css/login.css">
<script src="../js/bootstrap.min.js"></script>
<body class="wil">
<div class="btn-group wik">
  <button type="button" class="btn btn-default">Student Login</button>
  <button type="button" class="btn btn-default">Admin Login</button>
  <button type="button" class="btn btn-default"><a href="register.php">Register</a></button>
</div>
<table class="table table-striped table-bordered table-condensed">
<form action="register_process.php" method="POST" class="navbar-form navbar-left" role="search">
	<div class="form-group wit">
		<input type="text" class="form-control " name="S_name" placeholder="Full Name">
		<br>
		<input type="text" class="form-control " name="S_id" placeholder="Bits Id">
		<br>
		<input type="text" class="form-control " name="S_email" placeholder="Bits Email Id">
		<br>
		<input type="text" class="form-control " name="S_pass" placeholder="Password">
		<br>
		<input type="text" class="form-control " name="S_hostel" placeholder="Hostel Name">
		<br>
		<input type="text" class="form-control " name="S_room" placeholder="Room Number">
		<br>
		<input type="text" class="form-control " name="S_contact" placeholder="Contact Number">
		<br>
		<button type="submit" class="btn btn-default">Sign Up for Book Bank</button>
	</div>
</form>
</table>
</body>
<?php include "footer.php"; ?>