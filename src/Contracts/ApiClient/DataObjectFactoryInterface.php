<?php

namespace SlytherinCz\Contracts\ApiClient;

interface DataObjectFactoryInterface
{
    public function create(array $input): DataObjectInterface;
}