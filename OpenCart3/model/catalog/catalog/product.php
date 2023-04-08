<?php

namespace Catalog;

abstract class ModelCatalogProduct extends Model {
    /**
     * @param int $product_id
     * @return void
     */
    abstract public function updateViewed(int $product_id): void;

    /**
     * @param int $product_id
     * @return array|false
     */
    abstract public function getProduct(int $product_id): array|false;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getProducts(array $data = array()): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getProductSpecials(array $data = array()): array;

    /**
     * @param int $limit
     * @return array
     */
    abstract public function getLatestProducts(int $limit): array;

    /**
     * @param int $limit
     * @return array
     */
    abstract public function getPopularProducts(int $limit): array;

    /**
     * @param int $limit
     * @return array
     */
    abstract public function getBestSellerProducts(int $limit): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductAttributes(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductOptions(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductDiscounts(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductImages(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductRelated(int $product_id): array;

    /**
     * @param int $product_id
     * @return int
     */
    abstract public function getProductLayoutId(int $product_id): int;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getCategories(int $product_id): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalProducts(array $data = array()): int;

    /**
     * @param int $product_id
     * @param int $recurring_id
     * @return array
     */
    abstract public function getProfile(int $product_id, int $recurring_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProfiles(int $product_id): array;

    /**
     * @return int
     */
    abstract public function getTotalProductSpecials(): int;

    /**
     * @param int $product_id
     * @param array $category_ids
     * @return array
     */
    abstract public function checkProductCategory(int $product_id, array $category_ids): array;
}
