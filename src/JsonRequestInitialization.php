<?php

namespace FormRelay\JsonRequest;

use FormRelay\Core\Initialization;
use FormRelay\JsonRequest\DataDispatcher\JsonRequestDataDispatcher;

class JsonRequestInitialization extends Initialization
{
    const DATA_DISPATCHERS = [
        JsonRequestDataDispatcher::class,
    ];
}
