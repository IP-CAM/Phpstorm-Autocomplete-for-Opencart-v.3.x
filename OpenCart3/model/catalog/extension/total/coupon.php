<?php

namespace Catalog;

abstract class ModelExtensionTotalCoupon extends Model {
    /**
     * @param string $code
     * @return array|null
     */
    abstract public function getCoupon(string $code): ?array;

    /**
     * @param array $total
     * @return void
     */
    abstract public function getTotal(array $total): void;

    /**
     * @param array $order_info
     * @param array $order_total
     * @return int|null
     */
    abstract public function confirm(array $order_info, array $order_total): ?int;

    /**
     * @param int $order_id
     * @return void
     */
    abstract public function unconfirm(int $order_id): void;

    /**
     * @param string $coupon
     * @return int
     */
    abstract public function getTotalCouponHistoriesByCoupon(string $coupon): int;

    /**
     * @param string $coupon
     * @param int $customer_id
     * @return int
     */
    abstract public function getTotalCouponHistoriesByCustomerId(string $coupon, int $customer_id): int;
}
