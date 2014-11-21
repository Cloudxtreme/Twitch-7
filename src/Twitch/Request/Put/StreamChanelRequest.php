<?php

namespace Twitch\Request\Put;

class StreamChannelRequest extends \Twitch\Request\StreamChannelRequest
{

    /**
     * @inheritdoc
     */
    public function getRequestMethod()
    {
        return self::PUT;
    }
}
