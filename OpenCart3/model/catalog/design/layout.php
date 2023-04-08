<?php

namespace Catalog;

abstract class ModelDesignLayout extends Model {
    /**
     * @param string $route
     * @return int
     */
    abstract public function getLayout(string $route): int;

    /**
     * @param int $layout_id
     * @param string $position
     * @return array
     */
    abstract public function getLayoutModules(int $layout_id, string $position): array;
}