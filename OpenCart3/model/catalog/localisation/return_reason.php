<?php

namespace Catalog;

abstract class ModelLocalisationReturnReason extends Model {
    /**
     * @param array $data
     * @return array
     */
    abstract public function getReturnReasons(array $data = array()): array;
}
