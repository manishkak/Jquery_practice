<?php
// Fetching Values from URL.
$name = $_POST['name'];
//$email = $_POST['email'];
$message = $_POST['message'];
$comment = $_POST['comment'];
//$contact = $_POST['contact'];
//$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
echo '</br>Your name is- '.$name.' and your message is- '.$message.' and comment is- '.$comment;
$db = mysqli_connect('localhost','root','','db1') or die('cant connect to DB');
$qry="insert into info values('15','$name','$message','$comment')";
mysqli_query($db, $qry) or die("cant INSERT ".mysqli_error($db)." on line- ". __LINE__);
?>