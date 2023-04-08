<?php

namespace Catalog;

abstract class ModelExtensionFraudFraudLabsPro extends Model {
    /**
     * @param array $data
     * @return int|null
     */
    abstract public function check(array $data): ?int;
}