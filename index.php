<?php

$jsonTweet = file_get_contents("tweets.json");
$jsonArray = json_decode($jsonTweet, true);
if (!empty($_POST['tweet'])) {
    $tweet =
        [
            'texto' => $_POST['tweet'],
            'autor' => 'John Dow',
            'user' => 'John_Dow'
        ];
    $jsonArray['tweets'][] = $tweet;
    $tweetsJson = json_encode($jsonArray);
    file_put_contents('tweets.json', $tweetsJson);
}


require_once "index.html"; //2.declaro el require
