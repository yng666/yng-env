<?php

namespace Yng\Env\Loader;

use Yng\Utils\Packer\JsonPacker;

class JsonLoader extends AbstractLoader
{
    public function export(): array
    {
        return $this->hasEnv() ? (new JsonPacker())->unpack(\file_get_contents($this->path)) : [];
    }
}
