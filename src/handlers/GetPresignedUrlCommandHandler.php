<?php

namespace chemezov\yii2\yandex\cloud\handlers;

use chemezov\yii2\yandex\cloud\base\handlers\Handler;
use chemezov\yii2\yandex\cloud\commands\GetPresignedUrlCommand;

/**
 * Class GetPresignedUrlCommandHandler
 *
 * @package chemezov\yii2\yandex\cloud\handlers
 */
final class GetPresignedUrlCommandHandler extends Handler
{
    /**
     * @param \chemezov\yii2\yandex\cloud\commands\GetPresignedUrlCommand $command
     *
     * @return string
     */
    public function handle(GetPresignedUrlCommand $command): string
    {
        $awsCommand = $this->s3Client->getCommand('GetObject', $command->getArgs());
        $request = $this->s3Client->createPresignedRequest($awsCommand, $command->getExpiration());

        return (string)$request->getUri();
    }
}
