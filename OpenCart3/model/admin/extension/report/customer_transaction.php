<?php

namespace Admin;

abstract class ModelExtensionReportCustomerTransaction extends Model {
    /**
     * @param array $data
     * @return array
     */
    abstract public function getTransactions(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalTransactions(array $data = array()): int;
}