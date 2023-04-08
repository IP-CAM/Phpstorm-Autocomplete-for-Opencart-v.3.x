<?php

namespace Catalog;

abstract class ModelAccountDownload extends Model {
    /**
     * @param int $download_id
     * @return array|null
     */
    abstract public function getDownload(int $download_id): ?array;

    /**
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getDownloads(int $start = 0, int $limit = 20): array;

    /**
     * @return int
     */
    abstract public function getTotalDownloads(): int;
}