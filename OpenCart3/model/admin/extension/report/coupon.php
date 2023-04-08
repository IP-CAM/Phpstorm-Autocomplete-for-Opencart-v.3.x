<?php

namespace Admin;

abstract class ModelExtensionReportCoupon extends Model {
    /**
     * @param array $data
     * @return array
     */
    abstract public function getCoupons(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalCoupons(array $data = array()): int;
}