<?php

namespace Twitch;

class Twitch
{

    const URL    = 'https://api.twitch.tv/kraken%s';
    const ACCEPT = 'application/vnd.twitchtv.v3+json';

    /**
     * @var string
     */
    private $clientId;

    /**
     * @param string $clientId
     */
    public function __construct($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }
}
