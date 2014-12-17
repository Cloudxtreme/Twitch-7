<?php

namespace Twitch\Request\Get;

class StreamsRequest extends \Twitch\Request\StreamsRequest
{

    /**
     * @inheritdoc
     */
    public function getRequestMethod()
    {
        return self::GET;
    }
}
