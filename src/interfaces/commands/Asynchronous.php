<?php

namespace chemezov\yii2\yandex\cloud\interfaces\commands;

/**
 * Interface Asynchronous
 *
 * @package chemezov\yii2\yandex\cloud\interfaces\commands
 */
interface Asynchronous
{
    /**
     * @return mixed
     */
    public function async();

    /**
     * @return bool
     */
    public function isAsync(): bool;
}
