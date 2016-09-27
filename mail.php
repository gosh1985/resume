<?php
$to      = 'luchkoigor85@gmail.com';
$subject = $_POST['subject'];
$message = $_POST['text'];
$headers = 'From: luchkoigor85@gmail.com';
$result = mail($to, $subject, $message,$headers);
if($result)
{
	echo 'Text messege is sent to luchkoigor85@gmail.com';
}
else
{
	echo 'что-то не так';
}
?>