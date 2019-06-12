<?php

namespace chemezov\yii2\yandex\cloud\interfaces\commands;

/**
 * Interface PlainCommand
 *
 * @package chemezov\yii2\yandex\cloud\interfaces\commands
 */
interface PlainCommand extends Command
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return array
     */
    public function toArgs(): array;
}
