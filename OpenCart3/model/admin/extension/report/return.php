<?php

namespace Admin;

abstract class ModelExtensionReportReturn extends Model {
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
}