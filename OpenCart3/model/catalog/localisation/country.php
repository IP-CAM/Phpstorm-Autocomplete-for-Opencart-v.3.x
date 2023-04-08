<?php

namespace Catalog;

abstract class ModelLocalisationCountry extends Model {
    /**
     * @param int $country_id
     * @return array
     */
    abstract public function getCountry(int $country_id): array;

    /**
     * @return array
     */
    abstract public function getCountries(): array;
}