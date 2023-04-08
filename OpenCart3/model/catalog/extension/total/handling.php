<?php

namespace Catalog;

abstract class ModelExtensionTotalHandling extends Model {
    /**
     * @param array $total
     * @return void
     */
    abstract public function getTotal(array $total): void;
}