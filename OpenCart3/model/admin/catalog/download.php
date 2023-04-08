<?php

namespace Admin;

abstract class ModelCatalogDownload extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addDownload(array $data): int;

    /**
     * @param int $download_id
     * @param array $data
     * @return array
     */
    abstract public function editDownload(int $download_id, array $data): array;

    /**
     * @param int $download_id
     * @return void
     */
    abstract public function deleteDownload(int $download_id): void;

    /**
     * @param int $download_id
     * @return array
     */
    abstract public function getDownload(int $download_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getDownloads(array $data = array()): array;

    /**
     * @param int $download_id
     * @return array
     */
    abstract public function getDownloadDescriptions(int $download_id): array;

    /**
     * @return int
     */
    abstract public function getTotalDownloads(): int;
}