<?php

namespace Admin;

abstract class ModelLocalisationWeightClass extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addWeightClass(array $data): int;

    /**
     * @param int $weight_class_id
     * @param array $data
     * @return void
     */
    abstract public function editWeightClass(int $weight_class_id, array $data): void;

    /**
     * @param int $weight_class_id
     * @return void
     */
    abstract public function deleteWeightClass(int $weight_class_id): void;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getWeightClasses(array $data = array()): array;

    /**
     * @param int $weight_class_id
     * @return array
     */
    abstract public function getWeightClass(int $weight_class_id): array;

    /**
     * @param string $unit
     * @return array
     */
    abstract public function getWeightClassDescriptionByUnit(string $unit): array;

    /**
     * @param int $weight_class_id
     * @return array
     */
    abstract public function getWeightClassDescriptions(int $weight_class_id): array;

    /**
     * @return int
     */
    abstract public function getTotalWeightClasses(): int;
}