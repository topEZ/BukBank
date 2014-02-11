<?php include "header.php"; ?>
<body> 
		<div class="wrapper">
		<div align="center">Welcome to BukBank Search</div>
		<ul class="nav nav-tabs">
  <li ><a href="ad_profile.php">Add Books</a></li>
  <li><a href="issue.php">Issue Books</a></li>
  <li class="active"><a href="submit.php">Submit Books</a></li>
   <li ><a href="search.php">Search</a></li>
</ul>
<div id="add_buk" class="add_buk">
		<form action="submit_process.php" method="POST" class="navbar-form " role="search">
	<div class="form-group wit">
		<div class="form_elem">
		<span class="label label-default">SID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span>
		<input type="text" class="form-control " name="S_id" placeholder="Student's ID">
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">SName&nbsp:</span>
		<label>Student Name Appears Here</label>
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">Hostel :</span>
		<label>Hostel & Room No. Appears Here</label>
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">Ph No. :</span>
		<label>Contact No. Appears Here</label>
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">e-mail :</span>
		<label>email ID Appears Here</label>
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">Submitted:</span>
		<label>All</label><input type="checkbox">
		<label>Book1</label><input type="checkbox">
		<label>Book2</label><input type="checkbox">
		<label>Book3</label><input type="checkbox">
		<label>Book4</label><input type="checkbox">
		</div>
		<br>
		<button type="submit" class="btn btn-default">Submit</button>
	</div>
	</form>
</div>

	</div>
	</body>
<?php include "footer.php"; ?>
</html>