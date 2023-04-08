<?php

namespace Admin;

abstract class ModelLocalisationLanguage extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addLanguage(array $data): int;

    /**
     * @param int $language_id
     * @param array $data
     * @return void
     */
    abstract public function editLanguage(int $language_id, array $data): void;

    /**
     * @param int $language_id
     * @return void
     */
    abstract public function deleteLanguage(int $language_id): void;

    /**
     * @param int $language_id
     * @return array
     */
    abstract public function getLanguage(int $language_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getLanguages(array $data = array()): array;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getLanguageByCode(string $code): array;

    /**
     * @return int
     */
    abstract public function getTotalLanguages(): int;
}
