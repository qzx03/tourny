<?php
$email = "user1234.solicode@gmail.com";
$count = strpos($email, "@") - 1;
$star = str_repeat('*', $count);


$censoredEmail = $email[0] . $star . substr($email, strpos($email, "@")); 

echo $censoredEmail;

?>


