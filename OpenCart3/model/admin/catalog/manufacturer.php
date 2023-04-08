<?php

namespace Admin;

abstract class ModelCatalogManufacturer extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addManufacturer(array $data): int;

    /**
     * @param int $manufacturer_id
     * @param array $data
     * @return void
     */
    abstract public function editManufacturer(int $manufacturer_id, array $data): void;

    /**
     * @param int $manufacturer_id
     * @return void
     */
    abstract public function deleteManufacturer(int $manufacturer_id): void;

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

    /**
     * @param int $manufacturer_id
     * @return array
     */
    abstract public function getManufacturerStores(int $manufacturer_id): array;

    /**
     * @param int $manufacturer_id
     * @return array
     */
    abstract public function getManufacturerSeoUrls(int $manufacturer_id): array;

    /**
     * @return int
     */
    abstract public function getTotalManufacturers(): int;
}
