<?php

namespace Catalog;

abstract class ModelAccountTransaction extends Model {
    /**
     * @param array $data
     * @return array
     */
    abstract public function getTransactions(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalTransactions(): int;

    /**
     * @return float
     */
    abstract public function getTotalAmount(): float;
}