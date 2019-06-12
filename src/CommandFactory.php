<?php

namespace chemezov\yii2\yandex\cloud;

use chemezov\yii2\yandex\cloud\commands\DeleteCommand;
use chemezov\yii2\yandex\cloud\commands\ExistCommand;
use chemezov\yii2\yandex\cloud\commands\GetCommand;
use chemezov\yii2\yandex\cloud\commands\GetPresignedUrlCommand;
use chemezov\yii2\yandex\cloud\commands\GetUrlCommand;
use chemezov\yii2\yandex\cloud\commands\PutCommand;
use chemezov\yii2\yandex\cloud\commands\RestoreCommand;
use chemezov\yii2\yandex\cloud\commands\UploadCommand;
use chemezov\yii2\yandex\cloud\commands\ListCommand;
use chemezov\yii2\yandex\cloud\interfaces;

/**
 * Class CommandFactory
 *
 * @package chemezov\yii2\yandex\cloud
 */
class CommandFactory
{
    /** @var \chemezov\yii2\yandex\cloud\interfaces\CommandBuilder */
    protected $builder;

    /**
     * CommandFactory constructor.
     *
     * @param \chemezov\yii2\yandex\cloud\interfaces\CommandBuilder $builder
     */
    public function __construct(interfaces\CommandBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param string $filename
     *
     * @return \chemezov\yii2\yandex\cloud\commands\GetCommand
     */
    public function get(string $filename): GetCommand
    {
        /** @var GetCommand $command */
        $command = $this->builder->build(GetCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $filename
     * @param mixed  $body
     *
     * @return \chemezov\yii2\yandex\cloud\commands\PutCommand
     */
    public function put(string $filename, $body): PutCommand
    {
        /** @var PutCommand $command */
        $command = $this->builder->build(PutCommand::class);
        $command->withFilename($filename)->withBody($body);

        return $command;
    }

    /**
     * @param string $filename
     *
     * @return \chemezov\yii2\yandex\cloud\commands\DeleteCommand
     */
    public function delete(string $filename): DeleteCommand
    {
        /** @var DeleteCommand $command */
        $command = $this->builder->build(DeleteCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $filename
     * @param mixed  $source
     *
     * @return \chemezov\yii2\yandex\cloud\commands\UploadCommand
     */
    public function upload(string $filename, $source): UploadCommand
    {
        /** @var UploadCommand $command */
        $command = $this->builder->build(UploadCommand::class);
        $command->withFilename($filename)->withSource($source);

        return $command;
    }

    /**
     * @param string $filename
     * @param int    $days      lifetime of the active copy in days
     *
     * @return \chemezov\yii2\yandex\cloud\commands\RestoreCommand
     */
    public function restore(string $filename, int $days): RestoreCommand
    {
        /** @var RestoreCommand $command */
        $command = $this->builder->build(RestoreCommand::class);
        $command->byFilename($filename)->withLifetime($days);

        return $command;
    }

    /**
     * @param string $filename
     *
     * @return \chemezov\yii2\yandex\cloud\commands\ExistCommand
     */
    public function exist(string $filename): ExistCommand
    {
        /** @var ExistCommand $command */
        $command = $this->builder->build(ExistCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $prefix
     *
     * @return \chemezov\yii2\yandex\cloud\commands\ListCommand
     */
    public function list(string $prefix): ListCommand
    {
        /** @var ListCommand $command */
        $command = $this->builder->build(ListCommand::class);
        $command->byPrefix($prefix);

        return $command;
    }

    /**
     * @param string $filename
     *
     * @return \chemezov\yii2\yandex\cloud\commands\GetUrlCommand
     */
    public function getUrl(string $filename): GetUrlCommand
    {
        /** @var GetUrlCommand $command */
        $command = $this->builder->build(GetUrlCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $filename
     * @param mixed  $expires
     *
     * @return \chemezov\yii2\yandex\cloud\commands\GetPresignedUrlCommand
     */
    public function getPresignedUrl(string $filename, $expires): GetPresignedUrlCommand
    {
        /** @var GetPresignedUrlCommand $command */
        $command = $this->builder->build(GetPresignedUrlCommand::class);
        $command->byFilename($filename)->withExpiration($expires);

        return $command;
    }
}
