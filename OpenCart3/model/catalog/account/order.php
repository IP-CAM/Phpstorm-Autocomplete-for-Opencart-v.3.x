<?php

namespace Catalog;

abstract class ModelAccountOrder extends Model {
    /**
     * @param int $order_id
     * @return array|false
     */
    abstract public function getOrder(int $order_id): array|false;

    /**
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getOrders(int $start = 0, int $limit = 20): array;

    /**
     * @param int $order_id
     * @param int $order_product_id
     * @return array
     */
    abstract public function getOrderProduct(int $order_id, int $order_product_id): array;

    /**
     * @param int $order_id
     * @return array
     */
    abstract public function getOrderProducts(int $order_id): array;

    /**
     * @param int $order_id
     * @param int $order_product_id
     * @return array
     */
    abstract public function getOrderOptions(int $order_id, int $order_product_id): array;

    /**
     * @param int $order_id
     * @return array
     */
    abstract public function getOrderVouchers(int $order_id): array;

    /**
     * @param int $order_id
     * @return array
     */
    abstract public function getOrderTotals(int $order_id): array;

    /**
     * @param int $order_id
     * @return array
     */
    abstract public function getOrderHistories(int $order_id): array;

    /**
     * @return int
     */
    abstract public function getTotalOrders(): int;

    /**
     * @param int $order_id
     * @return int
     */
    abstract public function getTotalOrderProductsByOrderId(int $order_id): int;

    /**
     * @param int $order_id
     * @return int
     */
    abstract public function getTotalOrderVouchersByOrderId(int $order_id): int;
}