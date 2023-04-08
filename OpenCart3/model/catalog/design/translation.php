<?php

namespace Catalog;

abstract class ModelDesignTranslation extends Model {
    /**
     * @param string $route
     * @return array
     */
    abstract public function getTranslations(string $route): array;
}
