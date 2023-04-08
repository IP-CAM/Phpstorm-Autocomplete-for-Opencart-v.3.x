<?php

namespace Catalog;

abstract class ModelSettingSetting extends Model {
    /**
     * @param string $code
     * @param int $store_id
     * @return array
     */
    abstract public function getSetting(string $code, int $store_id = 0): array;

    /**
     * @param string $key
     * @param int $store_id
     * @return string|null
     */
    abstract public function getSettingValue(string $key, int $store_id = 0): ?string;
}