<?php

namespace Admin;

use mysql_xdevapi\CollectionAdd;

abstract class ModelLocalisationStockStatus extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addStockStatus(array $data): int;

    /**
     * @param int $stock_status_id
     * @param array $data
     * @return void
     */
    abstract public function editStockStatus(int $stock_status_id, array $data): void;

    /**
     * @param int $stock_status_id
     * @return void
     */
    abstract public function deleteStockStatus(int $stock_status_id): void;

    /**
     * @param int $stock_status_id
     * @return array
     */
    abstract public function getStockStatus(int $stock_status_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getStockStatuses(array $data = array()): array;

    /**
     * @param int $stock_status_id
     * @return array
     */
    abstract public function getStockStatusDescriptions(int $stock_status_id): array;

    /**
     * @return int
     */
    abstract public function getTotalStockStatuses(): int;
}