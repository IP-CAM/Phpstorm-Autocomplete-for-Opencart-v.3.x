<?php

namespace Catalog;

abstract class ModelDesignTheme extends Model {
    /**
     * @param string $route
     * @param string $theme
     * @return array
     */
    abstract public function getTheme(string $route, string $theme): array;
}