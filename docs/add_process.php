<?php
// COMMIT ADD
$link = mysql_connect("localhost", "VENKY", "v")
or die("Could not connect: " . mysql_error());
mysql_select_db('BukBank', $link)
or die ( mysql_error());

$sql = "INSERT INTO book_details
(B_id,
B_Title,
B_Author,
B_ISBN,
B_Price,
B_copies)
VALUES
('" . $_POST['B_ID'] . "',
'" . $_POST['B_Title'] . "',
'" . $_POST['B_Author'] . "',
'" . $_POST['B_ISBN'] . "',
'" . $_POST['B_Price'] . "',
'" . $_POST['B_copies'] . "'
)";
if (isset($sql) && !empty($sql)) {
echo "<!--" . $sql . "-->";
$result = mysql_query($sql)
or die("Invalid query: " . mysql_error());
?>
<p align="center" style="color:#FF0000">
Books added succesfully. 
</p>
<?php
}
?>