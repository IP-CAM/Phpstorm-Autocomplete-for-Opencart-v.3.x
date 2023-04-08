<?php

namespace Admin;

abstract class ModelDesignBanner extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addBanner(array $data): int;

    /**
     * @param int $banner_id
     * @param array $data
     * @return void
     */
    abstract public function editBanner(int $banner_id, array $data): void;

    /**
     * @param int $banner_id
     * @return void
     */
    abstract public function deleteBanner(int $banner_id): void;

    /**
     * @param int $banner_id
     * @return array
     */
    abstract public function getBanner(int $banner_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getBanners(array $data = array()): array;

    /**
     * @param int $banner_id
     * @return array
     */
    abstract public function getBannerImages(int $banner_id): array;

    /**
     * @return int
     */
    abstract public function getTotalBanners(): int;
}
