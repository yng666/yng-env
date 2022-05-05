<?php

namespace Yng\Env\Loader;

use Yng\Env\Contracts\LoaderInterface;
use Yng\Utils\Exceptions\FileNotFoundException;

abstract class AbstractLoader implements LoaderInterface
{
    /**
     * @var string $path
     */
    protected string $path;

    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * @return bool
     */
    public function hasEnv(): bool
    {
        return \file_exists($this->path);
    }
}
