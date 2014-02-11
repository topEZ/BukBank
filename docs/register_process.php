<?php
// COMMIT ADD
$link = mysql_connect("localhost", "VENKY", "v")
or die("Could not connect: " . mysql_error());
mysql_select_db('BukBank', $link)
or die ( mysql_error());

$sql = "INSERT INTO student_details
(S_ID,
S_name,
S_pass,
S_email,
S_hostel,
S_room,
S_contact)
VALUES
('" . $_POST['S_id'] . "',
'" . $_POST['S_name'] . "',
'" . $_POST['S_pass'] . "',
'" . $_POST['S_email'] . "',
'" . $_POST['S_hostel'] . "',
'" . $_POST['S_room'] . "',
'" . $_POST['S_contact'] . "'
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