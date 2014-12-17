<?php

namespace Twitch;

use Guzzle\Http\Client;
use Stubborn\Stubborn;

class TwitchStubbornFactory
{

    /**
     * Pass the clientId or Twitch object
     *
     * @param string|Twitch $twitch
     * @param string $request
     * @param array $options
     * @return TwitchStubborn
     */
    public static function create($twitch, $request, array $options = null)
    {
        if (!$twitch instanceof Twitch) {
            $twitch = new Twitch($twitch);
        }

        $reflection = new \ReflectionClass('\Twitch\Request\\' . self::validateRequest($request));

        if ($options === null) {
            $options = [];
        }

        /** @var RequestInterface $requestInstance */
        $requestInstance = $reflection->newInstanceArgs($options);

        return new Stubborn(new TwitchStubborn(new Client(), $requestInstance, $twitch));
    }

    /**
     * @param $request
     * @return string
     * @throws \BadMethodCallException
     */
    private static function validateRequest($request)
    {
        switch (strtolower($request)) {
            case 'get\streamsrequest':
                return 'Get\StreamsRequest';
            default:
                throw new \BadMethodCallException(__CLASS__ . '::create() called with an unknown request object');
        }
    }
}
