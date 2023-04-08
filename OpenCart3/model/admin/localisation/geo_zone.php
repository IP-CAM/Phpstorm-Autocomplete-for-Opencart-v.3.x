<?php

namespace Admin;

abstract class ModelLocalisationGeoZone extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addGeoZone(array $data): int;

    /**
     * @param int $geo_zone_id
     * @param array $data
     * @return void
     */
    abstract public function editGeoZone(int $geo_zone_id, array $data): void;

    /**
     * @param int $geo_zone_id
     * @return void
     */
    abstract public function deleteGeoZone(int $geo_zone_id): void;

    /**
     * @param int $geo_zone_id
     * @return array
     */
    abstract public function getGeoZone(int $geo_zone_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getGeoZones(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalGeoZones(): int;

    /**
     * @param int $geo_zone_id
     * @return array
     */
    abstract public function getZoneToGeoZones(int $geo_zone_id): array;

    /**
     * @param int $geo_zone_id
     * @return int
     */
    abstract public function getTotalZoneToGeoZoneByGeoZoneId(int $geo_zone_id): int;

    /**
     * @param int $country_id
     * @return int
     */
    abstract public function getTotalZoneToGeoZoneByCountryId(int $country_id): int;

    /**
     * @param int $zone_id
     * @return int
     */
    abstract public function getTotalZoneToGeoZoneByZoneId(int $zone_id): int;
}