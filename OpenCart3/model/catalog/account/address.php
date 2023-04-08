<?php

namespace Catalog;

abstract class ModelAccountAddress extends Model {
    /**
     * @param int $customer_id
     * @param array $data
     * @return int
     */
    abstract public function addAddress(int $customer_id, array $data): int;

    /**
     * @param int $address_id
     * @param array $data
     * @return void
     */
    abstract public function editAddress(int $address_id, array $data): void;

    /**
     * @param int $address_id
     * @return void
     */
    abstract public function deleteAddress(int $address_id): void;

    /**
     * @param int $address_id
     * @return array|false
     */
    abstract public function getAddress(int $address_id): array|false;

    /**
     * @return array
     */
    abstract public function getAddresses(): array;

    /**
     * @return int
     */
    abstract public function getTotalAddresses(): int;
}
