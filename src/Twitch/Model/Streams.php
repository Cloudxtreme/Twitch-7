<?php

namespace Twitch\Model;

use Twitch\RegistryInterface;

class Streams
{

    const ENTITY_NAME = '\Twitch\Entity\Streams';

    private $twitch;

    public function __construct(RegistryInterface $twitch)
    {
        $this->twitch = $twitch;
        $this->twitch->setEntity(self::ENTITY_NAME);
    }

    public function findByChannel($channel)
    {
        return $this->twitch->find([
            'channel' => $channel
        ]);
    }
}
