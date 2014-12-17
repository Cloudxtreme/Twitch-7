<?php

namespace Twitch;

interface RegistryInterface
{

    public function __construct(Twitch $twitch);

    public function setEntity($entity);

    public function find(array $find);
}
