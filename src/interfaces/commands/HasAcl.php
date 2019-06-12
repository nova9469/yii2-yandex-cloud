<?php

namespace chemezov\yii2\yandex\cloud\interfaces\commands;

/**
 * Interface HasAcl
 *
 * @package chemezov\yii2\yandex\cloud\interfaces\commands
 */
interface HasAcl
{
    /**
     * @param string $acl
     */
    public function withAcl(string $acl);
}
