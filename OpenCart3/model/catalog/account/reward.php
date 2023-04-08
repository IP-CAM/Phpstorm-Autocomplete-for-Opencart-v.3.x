<?php

namespace Catalog;

abstract class ModelAccountReward extends Model {
    /**
     * @param array $data
     * @return array
     */
    abstract public function getRewards(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalRewards(): int;

    /**
     * @return int
     */
    abstract public function getTotalPoints(): int;
}