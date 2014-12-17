<?php

namespace Twitch;

use ReflectionClass;
use SplStack;

class TwitchRegistry implements RegistryInterface
{

    private $twitch;
    private $entity;

    public function __construct(Twitch $twitch)
    {
        $this->twitch = $twitch;
    }

    public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    public function find(array $find)
    {
        $stubborn = TwitchStubbornFactory::create($this->twitch, 'Get\StreamsRequest', [$find]);
        $result   = $stubborn->run();

        if ($result !== null) {
            if (!is_array($result)) {
                $result = [$result];
            }

            $entityReflection = new ReflectionClass($this->entity);
            $return           = new SplStack();

            foreach ($result as $entity) {

            }
            /*

            foreach($entityReflection->getProperties() as $property){
                $property->getName();
            }
            die;*/
        }

        return null;
    }
}
