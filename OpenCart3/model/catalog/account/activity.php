<?php

namespace Catalog;

abstract class ModelAccountActivity extends Model {
    /**
     * @param string $key
     * @param array $data
     * @return void
     */
    abstract public function addActivity(string $key, array $data): void;
}