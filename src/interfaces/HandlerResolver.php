<?php

namespace chemezov\yii2\yandex\cloud\interfaces;

use chemezov\yii2\yandex\cloud\interfaces\commands\Command;
use chemezov\yii2\yandex\cloud\interfaces\handlers\Handler;

/**
 * Interface HandlerResolver
 *
 * @package chemezov\yii2\yandex\cloud\interfaces
 */
interface HandlerResolver
{
    /**
     * @param \chemezov\yii2\yandex\cloud\interfaces\commands\Command $command
     *
     * @return \chemezov\yii2\yandex\cloud\interfaces\handlers\Handler
     */
    public function resolve(Command $command): Handler;

    /**
     * @param string $commandClass
     * @param mixed  $handler
     */
    public function bindHandler(string $commandClass, $handler);
}
