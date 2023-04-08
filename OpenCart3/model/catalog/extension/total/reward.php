<?php

namespace Catalog;

abstract class ModelExtensionTotalReward extends Model {
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
