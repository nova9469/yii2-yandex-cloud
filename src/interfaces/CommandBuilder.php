<?php

namespace chemezov\yii2\yandex\cloud\interfaces;

use chemezov\yii2\yandex\cloud\interfaces\commands\Command;

/**
 * Interface CommandBuilder
 *
 * @package chemezov\yii2\yandex\cloud\interfaces
 */
interface CommandBuilder
{
    /**
     * @param string $commandClass
     *
     * @return \chemezov\yii2\yandex\cloud\interfaces\commands\Command
     */
    public function build(string $commandClass): Command;
}
