<?php

namespace Admin;

abstract class ModelCatalogProduct extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addProduct(array $data): int;

    /**
     * @param int $product_id
     * @param array $data
     * @return void
     */
    abstract public function editProduct(int $product_id, array $data): void;

    /**
     * @param int $product_id
     * @return void
     */
    abstract public function copyProduct(int $product_id): void;

    /**
     * @param int $product_id
     * @return void
     */
    abstract public function deleteProduct(int $product_id): void;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProduct(int $product_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getProducts(array $data = array()): array;

    /**
     * @param int $category_id
     * @return array
     */
    abstract public function getProductsByCategoryId(int $category_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductDescriptions(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductCategories(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductFilters(int $product_id): array;

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
     * @param int $product_option_value_id
     * @return array
     */
    abstract public function getProductOptionValue(int $product_id, int $product_option_value_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductImages(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductDiscounts(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductSpecials(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductRewards(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductDownloads(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductStores(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductSeoUrls(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductLayouts(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getProductRelated(int $product_id): array;

    /**
     * @param int $product_id
     * @return array
     */
    abstract public function getRecurrings(int $product_id): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalProducts(array $data = array()): int;

    /**
     * @param int $tax_class_id
     * @return int
     */
    abstract public function getTotalProductsByTaxClassId(int $tax_class_id): int;

    /**
     * @param int $stock_status_id
     * @return int
     */
    abstract public function getTotalProductsByStockStatusId(int $stock_status_id): int;

    /**
     * @param int $weight_class_id
     * @return int
     */
    abstract public function getTotalProductsByWeightClassId(int $weight_class_id): int;

    /**
     * @param int $length_class_id
     * @return array
     */
    abstract public function getTotalProductsByLengthClassId(int $length_class_id): array;

    /**
     * @param int $download_id
     * @return int
     */
    abstract public function getTotalProductsByDownloadId(int $download_id): int;

    /**
     * @param int $manufacturer_id
     * @return int
     */
    abstract public function getTotalProductsByManufacturerId(int $manufacturer_id): int;

    /**
     * @param int $attribute_id
     * @return int
     */
    abstract public function getTotalProductsByAttributeId(int $attribute_id): int;

    /**
     * @param int $option_id
     * @return int
     */
    abstract public function getTotalProductsByOptionId(int $option_id): int;

    /**
     * @param int $recurring_id
     * @return int
     */
    abstract public function getTotalProductsByProfileId(int $recurring_id): int;

    /**
     * @param int $layout_id
     * @return int
     */
    abstract public function getTotalProductsByLayoutId(int $layout_id): int;
}
