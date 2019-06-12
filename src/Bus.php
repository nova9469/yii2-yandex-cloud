<?php

namespace chemezov\yii2\yandex\cloud;

use chemezov\yii2\yandex\cloud\interfaces;

/**
 * Class Bus
 *
 * @package chemezov\yii2\yandex\cloud
 */
class Bus implements interfaces\Bus
{
    /** @var interfaces\HandlerResolver */
    protected $resolver;

    /**
     * Bus constructor.
     *
     * @param \chemezov\yii2\yandex\cloud\interfaces\HandlerResolver $inflector
     */
    public function __construct(interfaces\HandlerResolver $inflector)
    {
        $this->resolver = $inflector;
    }

    /**
     * @param \chemezov\yii2\yandex\cloud\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(interfaces\commands\Command $command)
    {
        $handler = $this->resolver->resolve($command);
        
        return call_user_func([$handler, 'handle'], $command);
    }
}
