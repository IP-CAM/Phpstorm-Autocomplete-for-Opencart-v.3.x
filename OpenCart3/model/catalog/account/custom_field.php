<?php

namespace Catalog;

abstract class ModelAccountCustomField extends Model {
    /**
     * @param int $custom_field_id
     * @return array
     */
    abstract public function getCustomField(int $custom_field_id): array;

    /**
     * @param int $customer_group_id
     * @return array
     */
    abstract public function getCustomFields(int $customer_group_id = 0): array;
}