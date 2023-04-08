<?php

namespace Catalog;

abstract class ModelSettingExtension extends Model {
    /**
     * @param string $type
     * @return array
     */
    abstract public function getExtensions(string $type): array;
}