<?php

namespace Admin;


abstract class ModelSettingSetting extends Model {
    /**
     * @param string $code
     * @param int $store_id
     * @return array
     */
    abstract public function getSetting(string $code, int $store_id = 0): array;

    /**
     * @param string $code
     * @param array $data
     * @param int $store_id
     * @return void
     */
    abstract public function editSetting(string $code, array $data, int $store_id = 0): void;

    /**
     * @param string $code
     * @param int $store_id
     * @return void
     */
    abstract public function deleteSetting(string $code, int $store_id = 0): void;

    /**
     * @param string $key
     * @param int $store_id
     * @return string|null
     */
    abstract public function getSettingValue(string $key, int $store_id = 0): ?string;

    /**
     * @param string $code
     * @param string $key
     * @param string $value
     * @param int $store_id
     * @return void
     */
    abstract public function editSettingValue(string $code = '', string $key = '', string $value = '', int $store_id = 0): void;
}
