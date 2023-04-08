<?php

namespace Admin;

abstract class ModelSettingStore extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addStore(array $data): int;

    /**
     * @param int $store_id
     * @param array $data
     * @return void
     */
    abstract public function editStore(int $store_id, array $data): void;

    /**
     * @param int $store_id
     * @return void
     */
    abstract public function deleteStore(int $store_id): void;

    /**
     * @param int $store_id
     * @return array
     */
    abstract public function getStore(int $store_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getStores(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalStores(): int;

    /**
     * @param int $layout_id
     * @return int
     */
    abstract public function getTotalStoresByLayoutId(int $layout_id): int;

    /**
     * @param string $language
     * @return int
     */
    abstract public function getTotalStoresByLanguage(string $language): int;

    /**
     * @param string $currency
     * @return int
     */
    abstract public function getTotalStoresByCurrency(string $currency): int;

    /**
     * @param int $country_id
     * @return int
     */
    abstract public function getTotalStoresByCountryId(int $country_id): int;

    /**
     * @param int $zone_id
     * @return int
     */
    abstract public function getTotalStoresByZoneId(int $zone_id): int;

    /**
     * @param int $customer_group_id
     * @return int
     */
    abstract public function getTotalStoresByCustomerGroupId(int $customer_group_id): int;

    /**
     * @param int $information_id
     * @return int
     */
    abstract public function getTotalStoresByInformationId(int $information_id): int;

    /**
     * @param int $order_status_id
     * @return int
     */
    abstract public function getTotalStoresByOrderStatusId(int $order_status_id): int;
}