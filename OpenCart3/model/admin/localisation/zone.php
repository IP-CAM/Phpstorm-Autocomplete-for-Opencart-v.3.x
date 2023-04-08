<?php

namespace Admin;

abstract class ModelLocalisationZone extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addZone(array $data): int;

    /**
     * @param int $zone_id
     * @param array $data
     * @return void
     */
    abstract public function editZone(int $zone_id, array $data): void;

    /**
     * @param int $zone_id
     * @return void
     */
    abstract public function deleteZone(int $zone_id): void;

    /**
     * @param int $zone_id
     * @return array
     */
    abstract public function getZone(int $zone_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getZones(array $data = array()): array;

    /**
     * @param int $country_id
     * @return array
     */
    abstract public function getZonesByCountryId(int $country_id): array;

    /**
     * @return int
     */
    abstract public function getTotalZones(): int;

    /**
     * @param int $country_id
     * @return int
     */
    abstract public function getTotalZonesByCountryId(int $country_id): int;
}