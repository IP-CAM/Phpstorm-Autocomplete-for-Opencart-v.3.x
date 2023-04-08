<?php

namespace Catalog;

abstract class ModelExtensionFraudMaxMind extends Model {
    /**
     * @param array $order_info
     * @return int|null
     */
    abstract public function check(array $order_info): ?int;
}
