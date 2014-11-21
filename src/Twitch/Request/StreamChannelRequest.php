<?php

namespace Twitch\Request;

use Twitch\RequestInterface;

abstract class StreamChannelRequest implements RequestInterface
{
    private $channel;

    /**
     * @param String $channel
     */
    public function __construct($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return sprintf(self::STREAMS_CHANNEL, $this->channel);
    }

    /**
     * @inheritdoc
     */
    abstract function getRequestMethod();
}
