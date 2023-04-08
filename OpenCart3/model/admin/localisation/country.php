<?php

namespace Admin;

abstract class ModelLocalisationCountry extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addCountry(array $data): int;

    /**
     * @param int $country_id
     * @param array $data
     * @return void
     */
    abstract public function editCountry(int $country_id, array $data): void;

    /**
     * @param int $country_id
     * @return void
     */
    abstract public function deleteCountry(int $country_id): void;

    /**
     * @param int $country_id
     * @return array
     */
    abstract public function getCountry(int $country_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getCountries(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalCountries(): int;
}