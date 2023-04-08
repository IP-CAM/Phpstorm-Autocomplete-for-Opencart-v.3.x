<?php

namespace Catalog;

abstract class ModelExtensionTotalVoucher extends Model {
    /**
     * @param int $order_id
     * @param array $data
     * @return int
     */
    abstract public function addVoucher(int $order_id, array $data): int;

    /**
     * @param int $order_id
     * @return void
     */
    abstract public function disableVoucher(int $order_id): void;

    /**
     * @param string $code
     * @return array|null
     */
    abstract public function getVoucher(string $code): ?array;

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
}
