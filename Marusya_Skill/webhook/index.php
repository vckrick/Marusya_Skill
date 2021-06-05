<?php

$phrase = ["соси хуй", "иди нахуй", "быдло", "иди еби собак", "хуйло", "какой я тебе гугол долбаеб иди уроки учи ч`мо."];

$raw = file_get_contents("php://input");
$json = json_decode($raw, true);

$session = json_encode($json["session"]);
$r = rand(0, 4);
if ($json["request"]["original_utterance"] == "окей гугл"){
    $r = 5;
}
$send_packet = "{\"response\":{\"text\":\"${phrase[$r]}\", \"tts\":\"${phrase[$r]}\", \"end_session\":true}, \"session\":${session}, \"version\":\"1.0\"}";

echo $send_packet;
?>