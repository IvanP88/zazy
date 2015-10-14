<?php
$server = $_SERVER['HTTP_HOST'];
$message = $_POST[Message];
	
	mail("terminator_vin@ukr.net","Zaz",
	"Фамилия:							$_POST[surname]
	\nИмя: 								$_POST[name] 
	\nОтчество: 						$_POST[patronymic] 
	\nКакую компанию представляете: 	$_POST[company] 
	\nКонтактный телефон: 				$_POST[phone] 
	\nЕ-mail: 							$_POST[email] 
	\nВаш запрос: 						$message"
	,"From: Zazy@" . $_SERVER['HTTP_HOST'] );
	
	mail("terminator_vin@ukr.net","Zaz","Name: $_POST[Name] \nE-Mail: $_POST[Email] \nMessage: $message","From: Zazy@" . $_SERVER['HTTP_HOST'] );
	print("<h2>Ваш запит відправлено.</h2>") ;
	
echo
"<html>
  <head>
   <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
  </head>
</html>";
?>