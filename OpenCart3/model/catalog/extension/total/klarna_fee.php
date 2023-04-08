<?php

namespace Catalog;

abstract class ModelExtensionTotalKlarnaFee extends Model {
    /**
     * @param array $total
     * @return void
     */
    abstract public function getTotal(array $total): void;
}