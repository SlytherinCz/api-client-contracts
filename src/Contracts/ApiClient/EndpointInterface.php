<?php

namespace SlytherinCz\Contracts\ApiClient;

interface EndpointInterface
{
    public function list(?int $page = null, ?int $perPage = null, ?array $query = null): ListInterface;
    public function setId(string $id);
    public function show(?array $query = null): DataObjectInterface;
    public function create(DataObjectInterface $data): DataObjectInterface ;
    public function update(DataObjectInterface $data): DataObjectInterface;
    public function delete(): void;

    public function getEndpointUrl(): string;
    public function getSingleEntityUrl(): string;
    public function getDataObjectFactory(): DataObjectFactoryInterface;
}