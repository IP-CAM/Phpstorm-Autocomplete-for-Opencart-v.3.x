<?php

namespace Admin;

abstract class ModelCatalogAttribute extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addAttribute(array $data): int;

    /**
     * @param int $attribute_id
     * @param array $data
     * @return void
     */
    abstract public function editAttribute(int $attribute_id, array $data): void;

    /**
     * @param int $attribute_id
     * @return void
     */
    abstract public function deleteAttribute(int $attribute_id): void;

    /**
     * @param int $attribute_id
     * @return void
     */
    abstract public function getAttribute(int $attribute_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getAttributes(array $data = array()): array;

    /**
     * @param int $attribute_id
     * @return array
     */
    abstract public function getAttributeDescriptions(int $attribute_id): array;

    /**
     * @return int
     */
    abstract public function getTotalAttributes(): int;

    /**
     * @param int $attribute_group_id
     * @return int
     */
    abstract public function getTotalAttributesByAttributeGroupId(int $attribute_group_id): int;
}
