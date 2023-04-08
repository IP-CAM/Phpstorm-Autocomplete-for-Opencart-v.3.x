<?php

namespace Catalog;

abstract class ModelExtensionTotalCredit extends Model {
    /**
     * @param array $total
     * @return void
     */
    abstract public function getTotal(array $total): void;

    /**
     * @param array $order_info
     * @param array $order_total
     * @return void
     */
    abstract public function confirm(array $order_info, array $order_total): void;

    /**
     * @param int $order_id
     * @return void
     */
    abstract public function unconfirm(int $order_id): void;
}
