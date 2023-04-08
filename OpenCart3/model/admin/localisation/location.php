<?php

namespace Admin;

abstract class ModelLocalisationLocation extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addLocation(array $data): int;

    /**
     * @param int $location_id
     * @param array $data
     * @return void
     */
    abstract public function editLocation(int $location_id, array $data): void;

    /**
     * @param int $location_id
     * @return void
     */
    abstract public function deleteLocation(int $location_id): void;

    /**
     * @param int $location_id
     * @return array
     */
    abstract public function getLocation(int $location_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getLocations(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalLocations(): int;
}
