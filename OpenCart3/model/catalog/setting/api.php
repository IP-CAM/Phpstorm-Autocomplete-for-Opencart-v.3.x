<?php

namespace Catalog;

abstract class ModelSettingApi extends Model {
    /**
     * @param string $username
     * @param string $key
     * @return array
     */
    abstract public function login(string $username, string $key): array;
}