<?php include "header.php"; ?>
<body> 
		<div class="wrapper">
		<div align="center">Welcome to BukBank Search</div>
		<ul class="nav nav-tabs">
  <li ><a href="ad_profile.php">Add Books</a></li>
  <li class="active"><a href="issue.php">Issue Books</a></li>
  <li><a href="submit.php">Submit Books</a></li>
   <li ><a href="search.php">Search</a></li>
</ul>
<div id="add_buk" class="add_buk">
		<form action="issue_process.php" method="POST" class="navbar-form " role="search">
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
		<span class="label label-default">ISBN &nbsp&nbsp&nbsp:</span>
		<input type="text" class="form-control " name="B_ISBN" placeholder="Book's ISBN">
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">BID &nbsp&nbsp&nbsp:</span>
		<input type="text" class="form-control " name="B_id" placeholder="Book's ID">
		</div>
		<br>
		<button type="submit" class="btn btn-default">Issue Next Book</button>
		<button type="submit" class="btn btn-default">Finish Issue</button>
	</div>
	</form>
</div>

	</div>
	</body>
<?php include "footer.php"; ?>
</html>