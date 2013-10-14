<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link href="forms.css" rel="stylesheet" type="text/css"  />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>FORM FEEDBACK</title>
</head>
<body>

<!--
Programmer: 	Nanette K. Hartley
Language: 		PHP
Filename: 	 	form.php
Date: 			10/12/2013
Description:	Practice handling data from HTML forms.
-->
 
<?php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$comments=$_REQUEST['comments'];

/* not used
$_REQUEST['age'];
$_REQUEST['gender'];
$_REQUEST['submit'];
*/

printf("<p>Thank you, <b>$name</b>, for the following comments: <br />
	<tt>$comments</tt></p>
	<p>We will reply to you at <i>$email</i>.  </p>\n");
?>