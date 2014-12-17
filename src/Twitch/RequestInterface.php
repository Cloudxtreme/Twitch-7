<?php

namespace Twitch;

interface RequestInterface
{

    const STREAMS = '/streams?%s';

    const GET = 'GET';
    const PUT = 'PUT';
    const DELETE = 'DELETE';

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return string
     */
    public function getRequestMethod();
}
