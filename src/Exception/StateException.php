<?php

namespace Emmadonjo\Naija\Exception;

use Exception;

class StateException extends Exception
{

    /**
     * S
     * @return \Emmadonjo\Naija\Exception\StateException
     */
    public static function unknownStateInformationException(): self
    {
        return new static("The State information is either unknown or cannot be found");
    }
}