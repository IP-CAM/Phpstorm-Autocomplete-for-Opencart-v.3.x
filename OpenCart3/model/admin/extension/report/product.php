<?php

namespace Admin;

abstract class ModelExtensionReportProduct extends Model {
    /**
     * @param array $data
     * @return array
     */
    abstract public function getProductsViewed(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalProductViews(): int;

    /**
     * @return int
     */
    abstract public function getTotalProductsViewed(): int;

    /**
     * @return void
     */
    abstract public function reset(): void;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getPurchased(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalPurchased(array $data): int;
}
