<?php

namespace Twitch\Request;

use Twitch\RequestInterface;

abstract class StreamsRequest implements RequestInterface
{
    private $options;

    /**
     * @param array $options
     */
    public function __construct(array $options)
    {
        $this->options = $options;
    }

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return sprintf(self::STREAMS, http_build_query($this->options));
    }

    /**
     * @inheritdoc
     */
    abstract function getRequestMethod();
}
