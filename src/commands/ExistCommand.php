<?php

namespace chemezov\yii2\yandex\cloud\commands;

use chemezov\yii2\yandex\cloud\base\commands\ExecutableCommand;
use chemezov\yii2\yandex\cloud\base\commands\traits\Options;
use chemezov\yii2\yandex\cloud\interfaces\commands\HasBucket;

/**
 * Class ExistCommand
 *
 * @method bool execute()
 *
 * @package chemezov\yii2\yandex\cloud\commands
 */
class ExistCommand extends ExecutableCommand implements HasBucket
{
    use Options;

    /** @var string */
    protected $bucket;

    /** @var string */
    protected $filename;

    /**
     * @return string
     */
    public function getBucket(): string
    {
        return (string)$this->bucket;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function inBucket(string $name)
    {
        $this->bucket = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return (string)$this->filename;
    }

    /**
     * @param string $filename
     *
     * @return $this
     */
    public function byFilename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }
}
