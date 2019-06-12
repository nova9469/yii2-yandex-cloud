<?php

namespace chemezov\yii2\yandex\cloud\base\handlers;

use Aws\S3\S3Client;
use chemezov\yii2\yandex\cloud\interfaces\handlers\Handler as HandlerInterface;

/**
 * Class Handler
 *
 * @package chemezov\yii2\yandex\cloud\base\handlers
 */
abstract class Handler implements HandlerInterface
{
    /** @var S3Client */
    protected $s3Client;

    /**
     * Handler constructor.
     *
     * @param \Aws\S3\S3Client $s3Client
     */
    public function __construct(S3Client $s3Client)
    {
        $this->s3Client = $s3Client;
    }
}
