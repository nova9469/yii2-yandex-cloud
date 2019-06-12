<?php

namespace chemezov\yii2\yandex\cloud\handlers;

use chemezov\yii2\yandex\cloud\base\handlers\Handler;
use chemezov\yii2\yandex\cloud\commands\GetUrlCommand;

/**
 * Class GetUrlCommandHandler
 *
 * @package chemezov\yii2\yandex\cloud\handlers
 */
final class GetUrlCommandHandler extends Handler
{
    /**
     * @param \chemezov\yii2\yandex\cloud\commands\GetUrlCommand $command
     *
     * @return string
     */
    public function handle(GetUrlCommand $command): string
    {
        return $this->s3Client->getObjectUrl($command->getBucket(), $command->getFilename());
    }
}
