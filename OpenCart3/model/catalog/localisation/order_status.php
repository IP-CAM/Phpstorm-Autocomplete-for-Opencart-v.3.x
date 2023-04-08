<?php

namespace Catalog;

abstract class ModelLocalisationOrderStatus extends Model {
    /**
     * @param int $order_status_id
     * @return array
     */
    abstract public function getOrderStatus(int $order_status_id): array;

    /**
     * @return array
     */
    abstract public function getOrderStatuses(): array;
}