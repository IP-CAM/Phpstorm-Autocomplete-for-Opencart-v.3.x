<?php

namespace Catalog;

abstract class ModelReportStatistics extends Model {
    /**
     * @return array
     */
    abstract public function getStatistics(): array;

    /**
     * @param string $code
     * @return float|null
     */
    abstract public function getValue(string $code): ?float;

    /**
     * @param string $code
     * @param float $value
     * @return void
     */
    abstract public function addValue(string $code, float $value): void;

    /**
     * @param string $code
     * @param float $value
     * @return void
     */
    abstract public function removeValue(string $code, float $value): void;

    /**
     * @param string $code
     * @param float $value
     * @return void
     */
    abstract public function editValue(string $code, float $value): void;
}