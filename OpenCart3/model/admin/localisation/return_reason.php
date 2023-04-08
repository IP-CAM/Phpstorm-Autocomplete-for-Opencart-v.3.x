<?php

namespace Admin;

abstract class ModelLocalisationReturnReason extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addReturnReason(array $data): int;

    /**
     * @param int $return_reason_id
     * @param array $data
     * @return void
     */
    abstract public function editReturnReason(int $return_reason_id, array $data): void;

    /**
     * @param int $return_reason_id
     * @return void
     */
    abstract public function deleteReturnReason(int $return_reason_id): void;

    /**
     * @param int $return_reason_id
     * @return array
     */
    abstract public function getReturnReason(int $return_reason_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getReturnReasons(array $data = array()): array;

    /**
     * @param int $return_reason_id
     * @return array
     */
    abstract public function getReturnReasonDescriptions(int $return_reason_id): array;

    /**
     * @return int
     */
    abstract public function getTotalReturnReasons(): int;
}