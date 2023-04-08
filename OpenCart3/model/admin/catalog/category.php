<?php

namespace Admin;

abstract class ModelCatalogCategory extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addCategory(array $data): int;

    /**
     * @param int $category_id
     * @param array $data
     * @return void
     */
    abstract public function editCategory(int $category_id, array $data): void;

    /**
     * @param int $category_id
     * @return void
     */
    abstract public function deleteCategory(int $category_id): void;

    /**
     * @param int $parent_id
     * @return void
     */
    abstract public function repairCategories(int $parent_id = 0): void;

    /**
     * @param int $category_id
     * @return array
     */
    abstract public function getCategory(int $category_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getCategories(array $data = array()): array;

    /**
     * @param int $category_id
     * @return array
     */
    abstract public function getCategoryDescriptions(int $category_id): array;

    /**
     * @param int $category_id
     * @return array
     */
    abstract public function getCategoryPath(int $category_id): array;

    /**
     * @param int $category_id
     * @return array
     */
    abstract public function getCategoryFilters(int $category_id): array;

    /**
     * @param int $category_id
     * @return array
     */
    abstract public function getCategoryStores(int $category_id): array;

    /**
     * @param int $category_id
     * @return array
     */
    abstract public function getCategorySeoUrls(int $category_id): array;

    /**
     * @param int $category_id
     * @return array
     */
    abstract public function getCategoryLayouts(int $category_id): array;

    /**
     * @return int
     */
    abstract public function getTotalCategories(): int;

    /**
     * @param int $layout_id
     * @return int
     */
    abstract public function getTotalCategoriesByLayoutId(int $layout_id): int;
}