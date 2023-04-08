<?php

namespace Admin;

abstract class ModelLocalisationTaxRate extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addTaxRate(array $data): int;

    /**
     * @param int $tax_rate_id
     * @param array $data
     * @return void
     */
    abstract public function editTaxRate(int $tax_rate_id, array $data): void;

    /**
     * @param int $tax_rate_id
     * @return void
     */
    abstract public function deleteTaxRate(int $tax_rate_id): void;

    /**
     * @param int $tax_rate_id
     * @return array
     */
    abstract public function getTaxRate(int $tax_rate_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getTaxRates(array $data = array()): array;

    /**
     * @param int $tax_rate_id
     * @return array
     */
    abstract public function getTaxRateCustomerGroups(int $tax_rate_id): array;

    /**
     * @return int
     */
    abstract public function getTotalTaxRates(): int;

    /**
     * @param int $geo_zone_id
     * @return int
     */
    abstract public function getTotalTaxRatesByGeoZoneId(int $geo_zone_id): int;
}