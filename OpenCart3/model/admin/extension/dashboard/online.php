<?php

namespace Admin;

abstract class ModelExtensionDashboardOnline extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalOnline(array $data = array()): int;
}