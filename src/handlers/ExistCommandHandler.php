<?php

namespace chemezov\yii2\yandex\cloud\handlers;

use chemezov\yii2\yandex\cloud\base\handlers\Handler;
use chemezov\yii2\yandex\cloud\commands\ExistCommand;

/**
 * Class ExistCommandHandler
 *
 * @package chemezov\yii2\yandex\cloud\handlers
 */
final class ExistCommandHandler extends Handler
{
    /**
     * @param \chemezov\yii2\yandex\cloud\commands\ExistCommand $command
     *
     * @return bool
     */
    public function handle(ExistCommand $command): bool
    {
        return $this->s3Client->doesObjectExist(
            $command->getBucket(),
            $command->getFilename(),
            $command->getOptions()
        );
    }
}
