<?php

namespace Admin;

abstract class ModelCatalogRecurring extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addRecurring(array $data): int;

    /**
     * @param int $recurring_id
     * @param array $data
     * @return void
     */
    abstract public function editRecurring(int $recurring_id, array $data): void;

    /**
     * @param int $recurring_id
     * @return void
     */
    abstract public function copyRecurring(int $recurring_id): void;

    /**
     * @param int $recurring_id
     * @return void
     */
    abstract public function deleteRecurring(int $recurring_id): void;

    /**
     * @param int $recurring_id
     * @return array
     */
    abstract public function getRecurring(int $recurring_id): array;

    /**
     * @param int $recurring_id
     * @return array
     */
    abstract public function getRecurringDescription(int $recurring_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getRecurrings(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalRecurrings(): int;
}