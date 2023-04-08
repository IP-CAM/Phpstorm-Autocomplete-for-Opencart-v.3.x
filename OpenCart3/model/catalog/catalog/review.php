<?php

namespace Catalog;

abstract class ModelCatalogReview extends Model {
    /**
     * @param int $product_id
     * @param array $data
     * @return void
     */
    abstract public function addReview(int $product_id, array $data): void;

    /**
     * @param int $product_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getReviewsByProductId(int $product_id, int $start = 0, int $limit = 20): array;

    /**
     * @param int $product_id
     * @return int
     */
    abstract public function getTotalReviewsByProductId(int $product_id): int;
}