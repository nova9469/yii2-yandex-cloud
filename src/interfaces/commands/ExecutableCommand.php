<?php

namespace chemezov\yii2\yandex\cloud\interfaces\commands;

/**
 * Interface ExecutableCommand
 *
 * @package chemezov\yii2\yandex\cloud\interfaces\commands
 */
interface ExecutableCommand extends Command
{
    /**
     * @return mixed
     */
    public function execute();
}
