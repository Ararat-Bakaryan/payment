<?php

namespace App\Exceptions;

class ClientDoesNotExistException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::CLIENT_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.client_does_not_exist');
    }
}
