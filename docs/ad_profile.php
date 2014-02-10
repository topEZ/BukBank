<?php include "header.php"; ?>
<body> 
		<div class="wrapper">
		<div align="center">Welcome to BukBank Search</div>
		<ul class="nav nav-tabs">
  <li class="active"><a href="ad_profile.php">Add Books</a></li>
  <li><a href="issue.php">Issue Books</a></li>
  <li><a href="submit.php">Submit Books</a></li>
   <li ><a href="search.php">Search</a></li>
</ul>
<div id="add_buk" class="add_buk">
		<form class="navbar-form " role="search">
	<div class="form-group wit">
		<div class="form_elem">
		<span class="label label-default">Title&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span>
		<input type="text" class="form-control " placeholder="Book Title">
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">Author&nbsp:</span>
		<input type="text" class="form-control " placeholder="Book Author">
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">Book ID:</span>
		<input type="text" class="form-control " placeholder="Book ID">
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">ISBN&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span>
		<input type="text" class="form-control " placeholder="Book ISBN">
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">Price&nbsp&nbsp&nbsp&nbsp&nbsp:</span>
		<input type="text" class="form-control " placeholder="Book's Price">
		</div>
		<br>
		<div class="form_elem">
		<span class="label label-default">Quantity:</span>
		<input type="text" class="form-control " placeholder="No. of Copies">
		</div>
		<br>
		<button type="submit" class="btn btn-default">Add Book</button>
	</div>
	</form>
</div>

	</div>
	</body>
<?php include "footer.php"; ?>
</html>