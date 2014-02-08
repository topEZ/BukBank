<?php include "header.php"; ?>
<div class="wrapper">

	<head>
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/bootstrap-theme.css">
		<script src="../js/bootstrap.js"></script>
		<title>Welcome to BukBank</title>
	</head>
	<body> 
		<div align="center">Welcome to BukBank Search</div>
		<div align="center">
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group" align=center>
					<input type="text" class="form-control" placeholder="Enter the search item">
					<!-- Split button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</body>
<?php include "footer.php"; ?>
</html>