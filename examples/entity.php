<?php

require realpath(__DIR__) . '/../vendor/autoload.php';

$twitch         = new \Twitch\Twitch('my-api-key');
$twitchRegistry = new \Twitch\TwitchRegistry($twitch);

$streamsModel = new \Twitch\Model\Streams($twitchRegistry);
$entity       = $streamsModel->findByChannel('legendarylea');

var_dump($entity);
