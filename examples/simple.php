<?php

require realpath(__DIR__) . '/../vendor/autoload.php';

$stubborn = \Twitch\TwitchStubbornFactory::create('api-key-here', 'Get\StreamsRequest', [[
    'channel' => 'legendarylea'
]]);

$result = $stubborn->run();

var_dump($result);
