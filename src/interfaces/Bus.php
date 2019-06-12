<?php

namespace chemezov\yii2\yandex\cloud\interfaces;

use chemezov\yii2\yandex\cloud\interfaces\commands\Command;

/**
 * Interface Bus
 *
 * @package chemezov\yii2\yandex\cloud\interfaces
 */
interface Bus
{
    /**
     * @param \chemezov\yii2\yandex\cloud\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);
}
