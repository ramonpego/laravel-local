<?php

namespace RamonPego\Local\Exceptions;

use Exception;

class CouldNotExecuteCommand extends Exception
{
    public static function userNotFoundInConfig(string $userName): self
    {
        return new static("Could not find a user named `{$userName}`");
    }

    public static function requiredConfigValueNotSet($hostName, string $configValue): self
    {
        return new static("The required config value `{$configValue}` is not set for host `{$hostName}`");
    }
}
