<?php

namespace Catalog;

abstract class ModelCatalogCategory extends Model {
    /**
     * @param int $category_id
     * @return array
     */
    abstract public function getCategory(int $category_id): array;

    /**
     * @param int $parent_id
     * @return array
     */
    abstract public function getCategories(int $parent_id = 0): array;

    /**
     * @param int $category_id
     * @return array
     */
    abstract public function getCategoryFilters(int $category_id): array;

    /**
     * @param int $category_id
     * @return int
     */
    abstract public function getCategoryLayoutId(int $category_id): int;

    /**
     * @param int $parent_id
     * @return int
     */
    abstract public function getTotalCategoriesByCategoryId(int $parent_id = 0): int;
}