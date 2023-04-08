<?php

namespace Admin;

abstract class ModelLocalisationOrderStatus extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addOrderStatus(array $data): int;

    /**
     * @param int $order_status_id
     * @param array $data
     * @return void
     */
    abstract public function editOrderStatus(int $order_status_id, array $data): void;

    /**
     * @param int $order_status_id
     * @return void
     */
    abstract public function deleteOrderStatus(int $order_status_id): void;

    /**
     * @param int $order_status_id
     * @return array
     */
    abstract public function getOrderStatus(int $order_status_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getOrderStatuses(array $data = array()): array;

    /**
     * @param int $order_status_id
     * @return array
     */
    abstract public function getOrderStatusDescriptions(int $order_status_id): array;

    /**
     * @return int
     */
    abstract public function getTotalOrderStatuses(): int;
}