<?php

namespace FormRelay\JsonRequest\Route;

use FormRelay\Request\Route\RequestRoute;

class JsonRequestRoute extends RequestRoute
{
    protected function getDispatcherKeyword(): string
    {
        return 'jsonRequest';
    }
}
