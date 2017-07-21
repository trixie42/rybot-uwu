<?php

$botToken = "401094935:AAExZ1cGJLaJ3Tj0ikGxuN7ZaQuJ8xqwqn8";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);


$text = $updateArray["result"]["0"]["message][chat][text]


file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");


?>
