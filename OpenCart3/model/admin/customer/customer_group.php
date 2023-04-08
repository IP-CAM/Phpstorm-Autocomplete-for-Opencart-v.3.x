<?php

namespace Admin;

abstract class ModelCustomerCustomerGroup extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addCustomerGroup(array $data): int;

    /**
     * @param int $customer_group_id
     * @param array $data
     * @return void
     */
    abstract public function editCustomerGroup(int $customer_group_id, array $data): void;

    /**
     * @param int $customer_group_id
     * @return void
     */
    abstract public function deleteCustomerGroup(int $customer_group_id): void;

    /**
     * @param int $customer_group_id
     * @return array
     */
    abstract public function getCustomerGroup(int $customer_group_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getCustomerGroups(array $data = array()): array;

    /**
     * @param int $customer_group_id
     * @return array
     */
    abstract public function getCustomerGroupDescriptions(int $customer_group_id): array;

    /**
     * @return int
     */
    abstract public function getTotalCustomerGroups(): int;
}
