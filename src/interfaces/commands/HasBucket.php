<?php

namespace chemezov\yii2\yandex\cloud\interfaces\commands;

/**
 * Interface HasBucket
 *
 * @package chemezov\yii2\yandex\cloud\interfaces\commands
 */
interface HasBucket
{
    /**
     * @param string $name
     */
    public function inBucket(string $name);
}
