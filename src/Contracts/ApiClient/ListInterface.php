<?php

namespace SlytherinCz\Contracts\ApiClient;

interface ListInterface
{
    public function getTotalPages(): int;
    public function getCurrentPage(): int;
    public function getTotalItems(): int;
    public function getNextPage(): ?int;
    public function getPreviousPage(): ?int;
    public function getItems(): array;
}