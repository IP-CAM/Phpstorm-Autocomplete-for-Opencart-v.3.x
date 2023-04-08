<?php

namespace Catalog;

abstract class ModelSettingStore extends Model {
    /**
     * @return array
     */
    abstract public function getStores(): array;
}