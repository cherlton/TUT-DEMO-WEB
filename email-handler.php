<?php
$name=$_POST['name'];
$email_visitor=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='cherltonmhangwana@gmail.com';

$email_subject='TUT Demo Institute';
$email_body="User name: $name.\n"
            "User email:$email_visitor.\n"
            "User subject:$subject.\n"
            "user message:$message.\n"
$to='221997441@tut4life.ac.za';
$headers="From:$email_visitor";
$headers="reply-to:$email_from";

email($to,$email_subject,$email_body,$headers);
$header("location:contact.html");


?>