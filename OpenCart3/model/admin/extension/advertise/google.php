<?php

namespace Admin;

abstract class ModelExtensionAdvertiseGoogle extends Model {
    /**
     * @param string $app_id
     * @param int $store_id
     * @return bool
     */
    abstract public function isAppIdUsed(string $app_id, int $store_id): bool;

    /**
     * @return int|null
     */
    abstract public function getFinalProductId(): ?int;

    /**
     * @param int $store_id
     * @return bool
     */
    abstract public function isAnyProductCategoryModified(int $store_id): bool;

    /**
     * @param int $store_id
     * @return int
     */
    abstract public function getAdvertisedCount(int $store_id): int;

    /**
     * @param int $store_id
     * @return array
     */
    abstract public function getMapping(int $store_id): array;

    /**
     * @param string $google_product_category
     * @param int $store_id
     * @param int $category_id
     * @return void
     */
    abstract public function setCategoryMapping(string $google_product_category, int $store_id, int $category_id): void;

    /**
     * @param string $google_product_category
     * @param int $store_id
     * @return array|null
     */
    abstract public function getMappedCategory(string $google_product_category, int $store_id): ?array;

    /**
     * @param int $product_advertise_google_id
     * @return array|null
     */
    abstract public function getProductByProductAdvertiseGoogleId(int $product_advertise_google_id): ?array;

    /**
     * @param int $product_advertise_google_id
     * @return array
     */
    abstract public function getProductAdvertiseGoogle(int $product_advertise_google_id): array;

    /**
     * @param int $store_id
     * @return bool
     */
    abstract public function hasActiveTarget(int $store_id): bool;

    /**
     * @param array $product_ids
     * @param int $store_id
     * @return array
     */
    abstract public function getRequiredFieldsByProductIds(array $product_ids, int $store_id): array;

    /**
     * @param array $data
     * @param int $store_id
     * @return array
     */
    abstract public function getRequiredFieldsByFilter(array $data, int $store_id): array;

    /**
     * @param array $product_ids
     * @param int $store_id
     * @return array
     */
    abstract public function getTargetCountriesByProductIds(array $product_ids, int $store_id): array;

    /**
     * @param array $data
     * @param int $store_id
     * @return array
     */
    abstract public function getTargetCountriesByFilter(array $data, int $store_id): array;

    /**
     * @param array $product_ids
     * @return array
     */
    abstract public function getProductOptionsByProductIds(array $product_ids): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getProductOptionsByFilter(array $data): array;

    /**
     * @param array $target
     * @param int $store_id
     * @return int
     */
    abstract public function addTarget(array $target, int $store_id): int;

    /**
     * @param array $product_ids
     * @return bool
     */
    abstract public function deleteProducts(array $product_ids): bool;

    /**
     * @param array $post_product_ids
     * @param array $post_target_ids
     * @param int $store_id
     * @return void
     */
    abstract public function setAdvertisingBySelect(array $post_product_ids, array $post_target_ids, int $store_id): void;

    /**
     * @param array $data
     * @param array $post_target_ids
     * @param int $store_id
     * @return void
     */
    abstract public function setAdvertisingByFilter(array $data, array $post_target_ids, int $store_id): void;

    /**
     * @param array $product_ids
     * @param int $store_id
     * @return void
     */
    abstract public function insertNewProducts(array $product_ids, int $store_id): void;

    /**
     * @param int $store_id
     * @return void
     */
    abstract public function updateGoogleProductCategoryMapping(int $store_id): void;

    /**
     * @param array $data
     * @return void
     */
    abstract public function updateSingleProductFields(array $data): void;

    /**
     * @param array $filter_data
     * @param array $data
     * @return void
     */
    abstract public function updateMultipleProductFields(array $filter_data, array $data): void;

    /**
     * @param array $data
     * @param int $store_id
     * @return array
     */
    abstract public function getCategories(array $data, int $store_id): array;

    /**
     * @param int $product_id
     * @param int $store_id
     * @return array
     */
    abstract public function getProductCampaigns(int $product_id, int $store_id): array;

    /**
     * @param int $product_id
     * @param int $store_id
     * @return array|null
     */
    abstract public function getProductIssues(int $product_id, int $store_id): ?array;

    /**
     * @return void
     */
    abstract public function renameTables(): void;

    /**
     * @return void
     */
    abstract public function createTables(): void;

    /**
     * @return void
     */
    abstract public function fixColumns(): void;

    /**
     * @return void
     */
    abstract public function dropTables(): void;

    /**
     * @return void
     */
    abstract public function deleteEvents(): void;

    /**
     * @return void
     */
    abstract public function createEvents(): void;

    /**
     * @return array
     */
    abstract public function getAllowedTargets(): array;
}
