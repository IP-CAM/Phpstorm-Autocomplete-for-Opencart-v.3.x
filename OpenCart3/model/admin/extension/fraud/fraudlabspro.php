<?php

namespace Admin;

abstract class ModelExtensionFraudFraudLabsPro extends Model {
    /**
     * @return void
     */
    abstract public function install(): void;

    /**
     * @return void
     */
    abstract public function uninstall(): void;

    /**
     * @param int $order_id
     * @return array
     */
    abstract public function getOrder(int $order_id): array;

    /**
     * @param int $order_id
     * @param array $data
     * @param int $store_id
     * @return mixed
     */
    abstract public function addOrderHistory(int $order_id, array $data, int $store_id = 0): mixed;
}