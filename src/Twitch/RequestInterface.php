<?php

namespace Twitch;

interface RequestInterface
{

    const STREAMS_CHANNEL = '/streams/%s';
    const STREAMS_CHANNEL_EDITORS = '/streams/%s/editors';
    const STREAMS_CHANNEL_VIDEOS = '/streams/%s/videos';
    const STREAMS_CHANNEL_FOLLOWS = '/streams/%s/follows';
    const STREAMS_CHANNEL_STREAM_KEY = '/streams/%s/stream_key';
    const STREAMS_CHANNEL_COMMERCIAL = '/streams/%s/commercial';

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
