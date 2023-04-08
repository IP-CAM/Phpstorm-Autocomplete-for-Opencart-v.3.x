<?php

namespace Catalog;

abstract class ModelAccountCustomerGroup extends Model {
    /**
     * @param int $customer_group_id
     * @return array
     */
    abstract public function getCustomerGroup(int $customer_group_id): array;

    /**
     * @return array
     */
    abstract public function getCustomerGroups(): array;
}