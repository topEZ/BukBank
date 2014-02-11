<?php
//connect to MySQL; note we’ve used our own parameters- you should use
//your own for hostname, user, and password
$connect = mysql_connect("localhost", "VENKY", "v") or
die ("Hey loser, check your server connection.");
//create the main database if it doesn’t already exist
$create = mysql_query("CREATE DATABASE IF NOT EXISTS bukbank")
or die(mysql_error());
//make sure our recently created database is the active one
mysql_select_db("bukbank");
//create "movie" table
$student = "CREATE TABLE student_details (
S_ID varchar(255) NOT NULL ,
S_name varchar(255) NOT NULL,
S_pass varchar(255) NOT NULL ,
S_email varchar(255) NOT NULL ,
S_hostel varchar(5) NOT NULL ,
S_room int(10) NOT NULL ,
S_contact int(10) NOT NULL , 
PRIMARY KEY (S_ID)
)";
$results = mysql_query($student)
or die (mysql_error());

$books = "CREATE TABLE book_details (
B_id int(11) NOT NULL ,
B_Title varchar(100) NOT NULL,
B_Author varchar(100) NOT NULL,
B_ISBN int(100) NOT NULL,
B_Price int(10) NOT NULL,
B_copies int(10) NOT NULL,

PRIMARY KEY (B_id)
)";
$results = mysql_query($books)
or die(mysql_error());
//create "people" table
$issue = "CREATE TABLE issue (
I_S_id varchar(100) NOT NULL ,
I_B_id int(11) NOT NULL,
PRIMARY KEY (I_B_id)
)";
$results = mysql_query($issue)
or die(mysql_error());
$submt = "CREATE TABLE submt (
S_S_id varchar(100) NOT NULL ,
S_B_id int(11) NOT NULL,
PRIMARY KEY (S_B_id)
)";
$results = mysql_query($submt)
or die(mysql_error());
echo "Movie Database successfully created!";
?>