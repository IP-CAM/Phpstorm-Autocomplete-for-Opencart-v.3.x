<?php

namespace Admin;

abstract class ModelCustomerCustomField extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addCustomField(array $data): int;

    /**
     * @param int $custom_field_id
     * @param array $data
     * @return void
     */
    abstract public function editCustomField(int $custom_field_id, array $data): void;

    /**
     * @param int $custom_field_id
     * @return void
     */
    abstract public function deleteCustomField(int $custom_field_id): void;

    /**
     * @param int $custom_field_id
     * @return array
     */
    abstract public function getCustomField(int $custom_field_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getCustomFields(array $data = array()): array;

    /**
     * @param int $custom_field_id
     * @return array
     */
    abstract public function getCustomFieldDescriptions(int $custom_field_id): array;

    /**
     * @param int $custom_field_value_id
     * @return array
     */
    abstract public function getCustomFieldValue(int $custom_field_value_id): array;

    /**
     * @param int $custom_field_id
     * @return array
     */
    abstract public function getCustomFieldValues(int $custom_field_id): array;

    /**
     * @param int $custom_field_id
     * @return array
     */
    abstract public function getCustomFieldCustomerGroups(int $custom_field_id): array;

    /**
     * @param int $custom_field_id
     * @return array
     */
    abstract public function getCustomFieldValueDescriptions(int $custom_field_id): array;

    /**
     * @return int
     */
    abstract public function getTotalCustomFields(): int;
}