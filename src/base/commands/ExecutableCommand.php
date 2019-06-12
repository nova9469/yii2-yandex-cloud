<?php

namespace chemezov\yii2\yandex\cloud\base\commands;

use chemezov\yii2\yandex\cloud\interfaces\Bus;
use chemezov\yii2\yandex\cloud\interfaces\commands\ExecutableCommand as ExecutableCommandInterface;

/**
 * Class ExecutableCommand
 *
 * @package chemezov\yii2\yandex\cloud\base\commands
 */
abstract class ExecutableCommand implements ExecutableCommandInterface
{
    /** @var \chemezov\yii2\yandex\cloud\interfaces\Bus */
    private $bus;

    /**
     * ExecutableCommand constructor.
     *
     * @param \chemezov\yii2\yandex\cloud\interfaces\Bus $bus
     */
    public function __construct(Bus $bus)
    {
        $this->bus = $bus;
    }

    /**
     * @return mixed
     */
    public function execute()
    {
        return $this->bus->execute($this);
    }
}
