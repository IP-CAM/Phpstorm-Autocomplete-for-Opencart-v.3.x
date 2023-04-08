<?php

namespace Admin;

abstract class ModelExtensionReportMarketing extends Model {
    /**
     * @param array $data
     * @return array
     */
    abstract public function getMarketing(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalMarketing(array $data = array()): int;
}