<?php

namespace Admin;

abstract class ModelMarketingCoupon extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addCoupon(array $data): int;

    /**
     * @param int $coupon_id
     * @param array $data
     * @return void
     */
    abstract public function editCoupon(int $coupon_id, array $data): void;

    /**
     * @param int $coupon_id
     * @return void
     */
    abstract public function deleteCoupon(int $coupon_id): void;

    /**
     * @param int $coupon_id
     * @return array
     */
    abstract public function getCoupon(int $coupon_id): array;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getCouponByCode(string $code): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getCoupons(array $data = array()): array;

    /**
     * @param int $coupon_id
     * @return array
     */
    abstract public function getCouponProducts(int $coupon_id): array;

    /**
     * @param int $coupon_id
     * @return array
     */
    abstract public function getCouponCategories(int $coupon_id): array;

    /**
     * @return int
     */
    abstract public function getTotalCoupons(): int;

    /**
     * @param int $coupon_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getCouponHistories(int $coupon_id, int $start = 0, int $limit = 10): array;

    /**
     * @param int $coupon_id
     * @return int
     */
    abstract public function getTotalCouponHistories(int $coupon_id): int;
}