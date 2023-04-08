<?php

namespace Catalog;

abstract class ModelExtensionModuleLaybuyLayout extends Model {
    /**
     * @param string $id
     * @return string
     */
    abstract public function getStatusLabel(string $id): string;

    /**
     * @param int $order_id
     * @return array
     */
    abstract public function getTransactionByOrderId(int $order_id): array;

    /**
     * @return array
     */
    abstract public function getTransactionStatuses(): array;

    /**
     * @param int $order_id
     * @return bool
     */
    abstract public function isLayBuyOrder(int $order_id): bool;
}