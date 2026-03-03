<?php
$email = "user1234.solicode@gmail.com";
$count = strpos($email, "@") - 1;
$star = str_repeat('*', $count);


$censoredEmail = $email[0] . $star . substr($email, strpos($email, "@")); 

echo $censoredEmail;

?>

<!-- test1@gmail.com
0123456789 -->