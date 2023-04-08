<?php

namespace Admin;

abstract class ModelLocalisationReturnStatus extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addReturnStatus(array $data): int;

    /**
     * @param int $return_status_id
     * @param array $data
     * @return void
     */
    abstract public function editReturnStatus(int $return_status_id, array $data): void;

    /**
     * @param int $return_status_id
     * @return void
     */
    abstract public function deleteReturnStatus(int $return_status_id): void;

    /**
     * @param int $return_status_id
     * @return array
     */
    abstract public function getReturnStatus(int $return_status_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getReturnStatuses(array $data = array()): array;

    /**
     * @param int $return_status_id
     * @return array
     */
    abstract public function getReturnStatusDescriptions(int $return_status_id): array;

    /**
     * @return int
     */
    abstract public function getTotalReturnStatuses(): int;
}