<?php

namespace Admin;

abstract class ModelCatalogFilter extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addFilter(array $data): int;

    /**
     * @param int $filter_group_id
     * @param array $data
     * @return void
     */
    abstract public function editFilter(int $filter_group_id, array $data): void;

    /**
     * @param int $filter_group_id
     * @return void
     */
    abstract public function deleteFilter(int $filter_group_id): void;

    /**
     * @param int $filter_group_id
     * @return array
     */
    abstract public function getFilterGroup(int $filter_group_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getFilterGroups(array $data = array()): array;

    /**
     * @param int $filter_group_id
     * @return array
     */
    abstract public function getFilterGroupDescriptions(int $filter_group_id): array;

    /**
     * @param int $filter_id
     * @return array
     */
    abstract public function getFilter(int $filter_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getFilters(array $data): array;

    /**
     * @param int $filter_group_id
     * @return array
     */
    abstract public function getFilterDescriptions(int $filter_group_id): array;

    /**
     * @return int
     */
    abstract public function getTotalFilterGroups(): int;
}
