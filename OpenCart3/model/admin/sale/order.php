<?php

namespace Admin;

abstract class ModelSaleOrder extends Model {
    /**
     * @param int $order_id
     * @return array|null
     */
    abstract public function getOrder(int $order_id): ?array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getOrders(array $data = array()): array;

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
     * @param int $voucher_id
     * @return array
     */
    abstract public function getOrderVoucherByVoucherId(int $voucher_id): array;

    /**
     * @param int $order_id
     * @return array
     */
    abstract public function getOrderTotals(int $order_id): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalOrders(array $data = array()): int;

    /**
     * @param int $store_id
     * @return int
     */
    abstract public function getTotalOrdersByStoreId(int $store_id): int;

    /**
     * @param int $order_status_id
     * @return int
     */
    abstract public function getTotalOrdersByOrderStatusId(int $order_status_id): int;

    /**
     * @return int
     */
    abstract public function getTotalOrdersByProcessingStatus(): int;

    /**
     * @return int
     */
    abstract public function getTotalOrdersByCompleteStatus(): int;

    /**
     * @param int $language_id
     * @return int
     */
    abstract public function getTotalOrdersByLanguageId(int $language_id): int;

    /**
     * @param int $currency_id
     * @return int
     */
    abstract public function getTotalOrdersByCurrencyId(int $currency_id): int;

    /**
     * @param array $data
     * @return float
     */
    abstract public function getTotalSales(array $data = array()): float;

    /**
     * @param int $order_id
     * @return string|null
     */
    abstract public function createInvoiceNo(int $order_id): ?string;

    /**
     * @param int $order_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getOrderHistories(int $order_id, int $start = 0, int $limit = 10): array;

    /**
     * @param int $order_id
     * @return int
     */
    abstract public function getTotalOrderHistories(int $order_id): int;

    /**
     * @param int $order_status_id
     * @return int
     */
    abstract public function getTotalOrderHistoriesByOrderStatusId(int $order_status_id): int;

    /**
     * @param array $products
     * @param int $start
     * @param int $end
     * @return array
     */
    abstract public function getEmailsByProductsOrdered(array $products, int $start, int $end): array;

    /**
     * @param array $products
     * @return int
     */
    abstract public function getTotalEmailsByProductsOrdered(array $products): int;
}
