<?php

namespace Catalog;

abstract class ModelLocalisationZone extends Model {
    /**
     * @param int $zone_id
     * @return array
     */
    abstract public function getZone(int $zone_id): array;

    /**
     * @param int $country_id
     * @return array
     */
    abstract public function getZonesByCountryId(int $country_id): array;
}