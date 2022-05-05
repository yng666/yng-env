<?php

namespace Yng\Env\Loader;

class IniFileLoader extends AbstractLoader
{
    public function export(): array
    {
        return $this->hasEnv() ? \parse_ini_file($this->path, true, INI_SCANNER_TYPED) : [];
    }
}
