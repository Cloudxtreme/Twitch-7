<?php

require realpath(__DIR__) . '/../vendor/autoload.php';

$stubborn = \Twitch\TwitchStubbornFactory::create('xxxxx', 'Get\StreamChannelRequest', ['sodapoppin']);
$result = $stubborn->run();

var_dump($result);
