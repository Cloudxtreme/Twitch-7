<?php

namespace Twitch;

use Guzzle\Http\Client;
use Stubborn\StubbornAwareInterface;
use Stubborn\StubbornResponse;
use Stubborn\StubbornResponseInterface;

class TwitchStubborn implements StubbornAwareInterface
{

    private $client;
    private $request;
    private $twitch;

    /**
     * @inheritdoc
     */
    public function __construct(Client $client, RequestInterface $request, Twitch $twitch)
    {
        $this->client  = $client;
        $this->request = $request;
        $this->twitch  = $twitch;
    }

    /**
     * @inheritdoc
     */
    public function getRetryNumber()
    {
        return 2;
    }

    /**
     * @inheritdoc
     */
    public function getRetryWaitSeconds()
    {
        return 10;
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url    = sprintf(Twitch::URL, $this->request->getUrl());
        $method = $this->request->getRequestMethod();

        $request = $this->client->createRequest($method, $url, [
            'Client-ID' => $this->twitch->getClientId(),
            'Accept'    => Twitch::ACCEPT
        ]);

        /** @var $response \Guzzle\Http\Message\Response */
        $response = $this->client->send($request);

        return new StubbornResponse($response->json(), $response->getStatusCode());
    }

    /**
     * @inheritdoc
     */
    public function getHttpActionRequest(StubbornResponseInterface $response)
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function getExceptionActionRequest(\Exception $exception)
    {
        return false;
    }
}
