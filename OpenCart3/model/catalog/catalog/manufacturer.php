<?php

namespace Catalog;

abstract class ModelCatalogManufacturer extends Model {
    /**
     * @param int $manufacturer_id
     * @return array
     */
    abstract public function getManufacturer(int $manufacturer_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getManufacturers(array $data = array()): array;
}