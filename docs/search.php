<?php include "header.php"; ?>
<body> 
		<div class="wrapper">
		<div align="center">Welcome to BukBank Search</div>
		<ul class="nav nav-tabs">
  <li ><a href="ad_profile.php">Add Books</a></li>
  <li><a href="issue.php">Issue Books</a></li>
  <li><a href="submit.php">Submit Books</a></li>
   <li class="active"><a href="search.php">Search</a></li>
</ul>
<div id="add_buk" class="add_buk">
	<div class="input-group" style="width:300px;">
  <input type="text" class="form-control">
  <div class="input-group-btn">
   <div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    Action <span class="caret"></span>
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
</div>
<br><br>
	<div class="panel panel-success">
  <!-- Default panel contents -->
  <div class="panel-heading">Search Results</div>
  <div class="panel-body">
    <p></p>
  </div>

  <!-- Table -->
      <table class="table table-hover" style="width:100%;">
        <thead>
          <tr>
            <th>#</th>
            <th>Book Title</th>
            <th>Book Author</th>
            <th>ISBN</th>
            <th>Available</th>
            <th>Issued</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td >1</td>
            <td>Java</td>
            <td>John</td>
            <td>1729345</td>
            <td>12</td>
            <td>4</td>
            <td><a href="#">Edit<a></td>
          </tr>
           <tr>
            <td >2</td>
            <td>C++</td>
            <td>Smith Dyer</td>
            <td>2529345</td>
            <td>4</td>
            <td>8</td>
            <td><a href="#">Edit<a></td>
          </tr>
          <tr>
            <td >3</td>
            <td>Analog Electronics</td>
            <td>Cooper D.L</td>
            <td>2584345</td>
            <td>3</td>
            <td>1</td>
            <td><a href="#">Edit<a></td>
          </tr>
        </tbody>
      </table>
    
</div>	
</div>

	</div>
	</body>
<?php include "footer.php"; ?>
</html>