<?php

namespace Admin;

abstract class ModelCatalogOption extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addOption(array $data): int;

    /**
     * @param int $option_id
     * @param array $data
     * @return void
     */
    abstract public function editOption(int $option_id, array $data): void;

    /**
     * @param int $option_id
     * @return void
     */
    abstract public function deleteOption(int $option_id): void;

    /**
     * @param int $option_id
     * @return array
     */
    abstract public function getOption(int $option_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getOptions(array $data = array()): array;

    /**
     * @param int $option_id
     * @return array
     */
    abstract public function getOptionDescriptions(int $option_id): array;

    /**
     * @param int $option_value_id
     * @return array
     */
    abstract public function getOptionValue(int $option_value_id): array;

    /**
     * @param int $option_id
     * @return array
     */
    abstract public function getOptionValues(int $option_id): array;

    /**
     * @param int $option_id
     * @return array
     */
    abstract public function getOptionValueDescriptions(int $option_id): array;

    /**
     * @return int
     */
    abstract public function getTotalOptions(): int;
}