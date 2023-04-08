<?php

namespace Admin;

abstract class ModelReportStatistics extends Model {
    /**
     * @return array
     */
    abstract public function getStatistics(): array;

    /**
     * @param string $code
     * @return string|null
     */
    abstract public function getValue(string $code): ?string;

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
    abstract public function editValue(string $code, float $value): void;

    /**
     * @param string $code
     * @param float $value
     * @return void
     */
    abstract public function removeValue(string $code, float $value): void;
}
