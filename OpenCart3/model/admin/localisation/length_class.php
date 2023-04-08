<?php

namespace Admin;

abstract class ModelLocalisationLengthClass extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addLengthClass(array $data): int;

    /**
     * @param int $length_class_id
     * @param array $data
     * @return void
     */
    abstract public function editLengthClass(int $length_class_id, array $data): void;

    /**
     * @param int $length_class_id
     * @return void
     */
    abstract public function deleteLengthClass(int $length_class_id): void;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getLengthClasses(array $data = array()): array;

    /**
     * @param int $length_class_id
     * @return array
     */
    abstract public function getLengthClass(int $length_class_id): array;

    /**
     * @param string $unit
     * @return array
     */
    abstract public function getLengthClassDescriptionByUnit(string $unit): array;

    /**
     * @param int $length_class_id
     * @return array
     */
    abstract public function getLengthClassDescriptions(int $length_class_id): array;

    /**
     * @return int
     */
    abstract public function getTotalLengthClasses(): int;
}