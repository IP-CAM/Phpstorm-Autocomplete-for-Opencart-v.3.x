<?php

namespace Admin;

abstract class ModelExtensionFeedGoogleBase extends Model {
    /**
     * @return void
     */
    abstract public function install(): void;

    /**
     * @return void
     */
    abstract public function uninstall(): void;

    /**
     * @param string $string
     * @return void
     */
    abstract public function import(string $string): void;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getGoogleBaseCategories(array $data = array()): array;

    /**
     * @param array $data
     * @return void
     */
    abstract public function addCategory(array $data): void;

    /**
     * @param int $category_id
     * @return void
     */
    abstract public function deleteCategory(int $category_id): void;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getCategories(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalCategories(): int;
}
