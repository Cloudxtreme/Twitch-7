<?php

namespace Twitch;

use Guzzle\Http\Client;

class TwitchStubbornFactory
{

    /**
     * @param $clientId
     * @param string $request
     * @param array $options
     * @return TwitchStubborn
     */
    public static function create($clientId, $request, array $options = null)
    {
        $reflection = new \ReflectionClass('\Twitch\Request\\' . self::validateRequest($request));

        if ($options === null) {
            $options = [];
        }

        /** @var RequestInterface $requestInstance */
        $requestInstance = $reflection->newInstanceArgs($options);

        return new TwitchStubborn(new Client(), $requestInstance, new Twitch($clientId));
    }

    /**
     * @param string $request
     */
    private static function validateRequest($request)
    {
        switch(strtolower($request)){
            case 'get\streamchannelrequest':
                return 'Get\StreamChannelRequest';
            default:
                throw new \BadMethodCallException(__CLASS__ . '::create() called with an unknown request object');
        }
    }
}
