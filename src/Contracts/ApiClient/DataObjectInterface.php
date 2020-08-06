<?php

namespace SlytherinCz\Contracts\ApiClient;

interface DataObjectInterface extends \JsonSerializable
{
    public function getId(): ?string;
    public function toArray(): array;
}