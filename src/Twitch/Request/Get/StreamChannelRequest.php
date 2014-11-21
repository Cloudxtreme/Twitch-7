<?php

namespace Twitch\Request\Get;

class StreamChannelRequest extends \Twitch\Request\StreamChannelRequest
{

    /**
     * @inheritdoc
     */
    public function getRequestMethod()
    {
        return self::GET;
    }
}
