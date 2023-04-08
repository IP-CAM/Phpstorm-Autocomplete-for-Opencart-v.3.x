<?php

namespace Admin;

abstract class ModelCatalogInformation extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addInformation(array $data): int;

    /**
     * @param int $information_id
     * @param array $data
     * @return void
     */
    abstract public function editInformation(int $information_id, array $data): void;

    /**
     * @param int $information_id
     * @return void
     */
    abstract public function deleteInformation(int $information_id): void;

    /**
     * @param int $information_id
     * @return array
     */
    abstract public function getInformation(int $information_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getInformations(array $data = array()): array;

    /**
     * @param int $information_id
     * @return array
     */
    abstract public function getInformationDescriptions(int $information_id): array;

    /**
     * @param int $information_id
     * @return array
     */
    abstract public function getInformationStores(int $information_id): array;

    /**
     * @param int $information_id
     * @return array
     */
    abstract public function getInformationSeoUrls(int $information_id): array;

    /**
     * @param int $information_id
     * @return array
     */
    abstract public function getInformationLayouts(int $information_id): array;

    /**
     * @return int
     */
    abstract public function getTotalInformations(): int;

    /**
     * @param int $layout_id
     * @return int
     */
    abstract public function getTotalInformationsByLayoutId(int $layout_id): int;
}