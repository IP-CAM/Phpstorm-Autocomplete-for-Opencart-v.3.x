<?php

namespace Admin;

abstract class ModelDesignTranslation extends Model {
    /**
     * @param array $data
     * @return void
     */
    abstract public function addTranslation(array $data): void;

    /**
     * @param int $translation_id
     * @param array $data
     * @return void
     */
    abstract public function editTranslation(int $translation_id, array $data): void;

    /**
     * @param int $translation_id
     * @return void
     */
    abstract public function deleteTranslation(int $translation_id): void;

    /**
     * @param int $translation_id
     * @return array
     */
    abstract public function getTranslation(int $translation_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getTranslations(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalTranslations(): int;
}
