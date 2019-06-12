<?php

namespace chemezov\yii2\yandex\cloud\commands;

use Aws\ResultInterface;
use chemezov\yii2\yandex\cloud\base\commands\ExecutableCommand;
use chemezov\yii2\yandex\cloud\base\commands\traits\Async;
use chemezov\yii2\yandex\cloud\base\commands\traits\Options;
use chemezov\yii2\yandex\cloud\interfaces\commands\Asynchronous;
use chemezov\yii2\yandex\cloud\interfaces\commands\HasBucket;
use chemezov\yii2\yandex\cloud\interfaces\commands\PlainCommand;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Class ListCommand
 *
 * @method ResultInterface|PromiseInterface execute()
 *
 * @package chemezov\yii2\yandex\cloud\commands
 */
class ListCommand extends ExecutableCommand implements PlainCommand, HasBucket, Asynchronous
{
    use Async;
    use Options;

    /** @var array */
    protected $args = [];

    /**
     * @return string
     */
    public function getBucket(): string
    {
        return $this->args['Bucket'] ?? '';
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function inBucket(string $name)
    {
        $this->args['Bucket'] = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->args['Prefix'] ?? '';
    }

    /**
     * @param string $prefix
     *
     * @return $this
     */
    public function byPrefix(string $prefix)
    {
        $this->args['Prefix'] = $prefix;

        return $this;
    }

    /**
     * @internal used by the handlers
     *
     * @return string
     */
    public function getName(): string
    {
        return 'ListObjects';
    }

    /**
     * @internal used by the handlers
     *
     * @return array
     */
    public function toArgs(): array
    {
        return array_replace($this->options, $this->args);
    }
}
