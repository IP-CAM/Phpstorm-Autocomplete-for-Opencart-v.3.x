<?php

namespace Admin;

abstract class ModelLocalisationTaxClass extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addTaxClass(array $data): int;

    /**
     * @param int $tax_class_id
     * @param array $data
     * @return void
     */
    abstract public function editTaxClass(int $tax_class_id, array $data): void;

    /**
     * @param int $tax_class_id
     * @return void
     */
    abstract public function deleteTaxClass(int $tax_class_id): void;

    /**
     * @param int $tax_class_id
     * @return array
     */
    abstract public function getTaxClass(int $tax_class_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getTaxClasses(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalTaxClasses(): int;

    /**
     * @param int $tax_class_id
     * @return array
     */
    abstract public function getTaxRules(int $tax_class_id): array;

    /**
     * @param int $tax_rate_id
     * @return int
     */
    abstract public function getTotalTaxRulesByTaxRateId(int $tax_rate_id): int;
}