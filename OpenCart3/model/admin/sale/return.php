<?php

namespace Admin;

abstract class ModelSaleReturn extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addReturn(array $data): int;

    /**
     * @param int $return_id
     * @param array $data
     * @return void
     */
    abstract public function editReturn(int $return_id, array $data): void;

    /**
     * @param int $return_id
     * @return void
     */
    abstract public function deleteReturn(int $return_id): void;

    /**
     * @param int $return_id
     * @return array
     */
    abstract public function getReturn(int $return_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getReturns(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalReturns(array $data = array()): int;

    /**
     * @param int $return_status_id
     * @return int
     */
    abstract public function getTotalReturnsByReturnStatusId(int $return_status_id): int;

    /**
     * @param int $return_reason_id
     * @return int
     */
    abstract public function getTotalReturnsByReturnReasonId(int $return_reason_id): int;

    /**
     * @param int $return_action_id
     * @return int
     */
    abstract public function getTotalReturnsByReturnActionId(int $return_action_id): int;

    /**
     * @param int $return_id
     * @param int $return_status_id
     * @param string $comment
     * @param int $notify
     * @return void
     */
    abstract public function addReturnHistory(int $return_id, int $return_status_id, string $comment, int $notify): void;

    /**
     * @param int $return_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getReturnHistories(int $return_id, int $start = 0, int $limit = 10): array;

    /**
     * @param int $return_id
     * @return int
     */
    abstract public function getTotalReturnHistories(int $return_id): int;

    /**
     * @param int $return_status_id
     * @return int
     */
    abstract public function getTotalReturnHistoriesByReturnStatusId(int $return_status_id): int;
}