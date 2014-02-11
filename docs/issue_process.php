<?php
// COMMIT ADD
$link = mysql_connect("localhost", "VENKY", "v")
or die("Could not connect: " . mysql_error());
mysql_select_db('BukBank', $link)
or die ( mysql_error());

$sql = "INSERT INTO issue
(I_S_id,
I_B_id,
VALUES
('" . $_POST['S_id'] . "',
'" . $_POST['B_id'] . "'

)";
if (isset($sql) && !empty($sql)) {
echo "<!--" . $sql . "-->";
$result = mysql_query($sql)
or die("Invalid query: " . mysql_error());
?>
<p align="center" style="color:#FF0000">
You have succesfully signed up. 
</p>
<?php
}
?>