<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-US" />
<title>Search</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="validations.js"></script>
</head>

<?php
include 'header.php';
include_once 'connectdb.php';

$search = mysql_real_escape_string($_GET["searchterm"]);

print "<h1>Search Results: $search</h1>";

$query = "SELECT * FROM magnetlinks WHERE title LIKE '%$search%'";
$length = 20;
include_once "results.php";


mysql_close($con);

include "footer.php" ?>
