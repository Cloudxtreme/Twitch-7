<?php

require realpath(__DIR__) . '/../vendor/autoload.php';

$client = new Guzzle\Http\Client();
$request = new Twitch\Request\Get\StreamChannelRequest('sodapoppin');
$twitch = new Twitch\Twitch('xxxxxx');

$twitchStubborn = new Twitch\TwitchStubborn($client, $request, $twitch);

$stubborn = new Stubborn\Stubborn($twitchStubborn);
$result = $stubborn->run();

var_dump($result);
