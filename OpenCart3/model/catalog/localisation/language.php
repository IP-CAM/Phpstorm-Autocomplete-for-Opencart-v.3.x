<?php

namespace Catalog;

abstract class ModelLocalisationLanguage extends Model {
    /**
     * @param int $language_id
     * @return array
     */
    abstract public function getLanguage(int $language_id): array;

    /**
     * @return array
     */
    abstract public function getLanguages(): array;
}