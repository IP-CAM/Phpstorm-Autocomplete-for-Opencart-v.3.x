<?php

namespace Catalog;

abstract class ModelCatalogInformation extends Model {
    /**
     * @param int $information_id
     * @return array
     */
    abstract public function getInformation(int $information_id): array;

    /**
     * @return array
     */
    abstract public function getInformations(): array;

    /**
     * @param int $information_id
     * @return int
     */
    abstract public function getInformationLayoutId(int $information_id): int;
}