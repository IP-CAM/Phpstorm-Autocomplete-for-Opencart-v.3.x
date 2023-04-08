<?php


namespace Catalog;

abstract class ModelExtensionAdvertiseGoogle extends Model {
    /**
     * @param int $product_id
     * @param int $store_id
     * @return string
     */
    abstract public function getHumanReadableCategory(int $product_id, int $store_id): string;

    /**
     * @param int $category_id
     * @return string
     */
    abstract public function getHumanReadableOpenCartCategory(int $category_id): string;

    /**
     * @param int $product_id
     * @param int $store_id
     * @return array
     */
    abstract public function getSizeAndColorOptionMap(int $product_id, int $store_id): array;

    /**
     * @param int $order_id
     * @return string|null
     */
    abstract public function getCoupon(int $order_id): ?string;

    /**
     * @param array $products
     * @param int $store_id
     * @return array
     */
    abstract public function getRemarketingProductIds(array $products, int $store_id): array;

    /**
     * @param array $products
     * @param int $store_id
     * @return array
     */
    abstract public function getRemarketingItems(array $products, int $store_id): array;
}