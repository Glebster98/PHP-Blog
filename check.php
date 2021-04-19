<?php
//print_r($_POST);
	$email = $_POST['email'];
	$message =$_POST['message'];

	$error ='';
	if (trim($email) == '')
		$error = 'Введите Ваш email';
	else if (trim($message)== '')
		$error = 'Введите само сообщение';
	else if (strlen($message) < 10)
		$error = 'сообщение должно содержать более 10 символов';

	if ($error != '' ){
		echo $error;
		exit;//выход из файла
}
	$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
	$headers = "From:$email\r\nReply-to:$email\r\nContent-type: text/html;charset=utf-8\r\n";

	mail('gleb.kovalenko.888@gmail.com', $subject, $message,$headers);
	header('Location:/about.php');


 