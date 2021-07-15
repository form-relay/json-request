<?php

namespace FormRelay\JsonRequest\DataDispatcher;

use FormRelay\Core\Model\Form\MultiValueField;
use FormRelay\Request\DataDispatcher\RequestDataDispatcher;

class JsonRequestDataDispatcher extends RequestDataDispatcher
{
    protected function getDefaultHeaders(): array
    {
        $headers = parent::getDefaultHeaders();
        $headers['Content-Type'] = 'application/json';
        return $headers;
    }

    protected function computeValueArray(array $data): array
    {
        $result = [];
        foreach ($data as $key => $value) {
            if (is_numeric($key)) {
                $key = (int) $key;
            }
            if ($value instanceof MultiValueField) {
                $value = $this->computeValueArray($value->toArray());
            }
            $result[$key] = $value;
        }
        return $result;
    }

    protected function buildBody(array $data): string
    {
        return json_encode($this->computeValueArray($data), JSON_PRETTY_PRINT);
    }
}
