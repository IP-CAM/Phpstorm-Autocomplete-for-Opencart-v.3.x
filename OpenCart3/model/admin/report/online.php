<?php

namespace Admin;

abstract class ModelReportOnline extends Model {
    /**
     * @param array $data
     * @return array
     */
    abstract public function getOnline(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalOnline(array $data = array()): int;
}
