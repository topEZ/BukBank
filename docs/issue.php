<?php include "header.php"; ?>
<body> 
		<div class="wrapper">
		<div align="center">Welcome to BukBank Search</div>
		<div class="btn-group wik">
 <button type="button" class="btn btn-default"><a href="ad_profile.php" target="_blank">Add Books</a></button>
  <button type="button" class="btn btn-default"><a href="issue.php" target="_blank">Issue Books</a></button>
  <button type="button" class="btn btn-default"><a href="submit.php" target="_blank">Submit Books</a></button>
  <button type="button" class="btn btn-default"><a href="search.php" target="_blank">Search</a></button>
</div>
<div id="add_buk" class="add_buk">
		<form class="navbar-form " role="search">
	<div class="form-group wit">
		<div class="form_elem">
		<span class="label label-default">SID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span>
		<input type="text" class="form-control " placeholder="Student's ID">
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
		<input type="text" class="form-control " placeholder="Book's ISBN">
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">BID &nbsp&nbsp&nbsp:</span>
		<input type="text" class="form-control " placeholder="Book's ID">
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