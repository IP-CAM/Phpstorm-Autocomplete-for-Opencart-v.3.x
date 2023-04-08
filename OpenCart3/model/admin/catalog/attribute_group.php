<?php

namespace Admin;

abstract class ModelCatalogAttributeGroup extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addAttributeGroup(array $data): int;

    /**
     * @param int $attribute_group_id
     * @param array $data
     * @return mixed
     */
    abstract public function editAttributeGroup(int $attribute_group_id, array $data);

    /**
     * @param int $attribute_group_id
     * @return void
     */
    abstract public function deleteAttributeGroup(int $attribute_group_id): void;

    /**
     * @param int $attribute_group_id
     * @return array
     */
    abstract public function getAttributeGroup(int $attribute_group_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getAttributeGroups(array $data = array()): array;

    /**
     * @param int $attribute_group_id
     * @return array
     */
    abstract public function getAttributeGroupDescriptions(int $attribute_group_id): array;

    /**
     * @return int
     */
    abstract public function getTotalAttributeGroups(): int;
}