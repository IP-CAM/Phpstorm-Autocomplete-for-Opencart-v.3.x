<?php

namespace Catalog;

abstract class ModelLocalisationLocation extends Model {
    /**
     * @param int $location_id
     * @return array
     */
    abstract public function getLocation(int $location_id): array;
}