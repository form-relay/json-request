<?php

namespace FormRelay\JsonRequest;

use FormRelay\Core\Initialization;
use FormRelay\JsonRequest\Route\JsonRequestRoute;

class JsonRequestRouteInitialization extends Initialization
{
    const ROUTES = [
        JsonRequestRoute::class,
    ];
}
