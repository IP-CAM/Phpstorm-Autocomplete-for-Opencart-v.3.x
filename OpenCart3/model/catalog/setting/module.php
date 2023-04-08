<?php

namespace Catalog;

abstract class ModelSettingModule extends Model {
    /**
     * @param int $module_id
     * @return array
     */
    abstract public function getModule(int $module_id): array;
}