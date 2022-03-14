<?php

$message1 = '0@sn9sirppa@#?ia\'jgtvryko1';
$length = strlen($message1) / 2;
$message1 = substr($message1, 5, $length);
$message1 = str_replace("@#?", ' ', $message1);

echo "\n" ;
echo $message1;
echo strrev($message1);

$message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$length = strlen($message2) / 2;
$message2 = substr($message2, 5, $length);
$message2= str_replace("@#?", ' ', $message2);

echo "\n" ;
echo $message2;
echo strrev($message2);

$message3 = 'aopi?sgnirts@#?sedhtg+p9l!';
$length = strlen($message3) / 2;
$message3 = substr($message3
, 5, $length);
$message3 = str_replace("@#?", ' ', $message3);

echo "\n" ;
echo $message3;
echo strrev($message3);


?>
