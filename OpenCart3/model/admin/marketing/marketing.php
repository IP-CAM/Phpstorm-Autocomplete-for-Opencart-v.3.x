<?php

namespace Admin;

abstract class ModelMarketingMarketing extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addMarketing(array $data): int;

    /**
     * @param int $marketing_id
     * @param array $data
     * @return void
     */
    abstract public function editMarketing(int $marketing_id, array $data): void;

    /**
     * @param int $marketing_id
     * @return void
     */
    abstract public function deleteMarketing(int $marketing_id): void;

    /**
     * @param int $marketing_id
     * @return array
     */
    abstract public function getMarketing(int $marketing_id): array;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getMarketingByCode(string $code): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getMarketings(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalMarketings(array $data = array()): int;
}