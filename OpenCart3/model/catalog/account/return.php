<?php

namespace Catalog;

abstract class ModelAccountReturn extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addReturn(array $data): int;

    /**
     * @param int $return_id
     * @return array
     */
    abstract public function getReturn(int $return_id): array;

    /**
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getReturns(int $start = 0, int $limit = 20): array;

    /**
     * @return int
     */
    abstract public function getTotalReturns(): int;

    /**
     * @param int $return_id
     * @return array
     */
    abstract public function getReturnHistories(int $return_id): array;
}
