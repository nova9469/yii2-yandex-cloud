<?php

namespace chemezov\yii2\yandex\cloud\interfaces;

use chemezov\yii2\yandex\cloud\interfaces\commands\Command;

/**
 * Interface Service
 *
 * @package chemezov\yii2\yandex\cloud\interfaces
 */
interface Service
{
    /**
     * @param \chemezov\yii2\yandex\cloud\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);

    /**
     * @param string $commandClass
     *
     * @return \chemezov\yii2\yandex\cloud\interfaces\commands\Command
     */
    public function create(string $commandClass): Command;
}
