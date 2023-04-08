<?php

namespace Admin;

abstract class ModelToolUpload extends Model {
    /**
     * @param string $name
     * @param string $filename
     * @return string
     */
    abstract public function addUpload(string $name, string $filename): string;

    /**
     * @param int $upload_id
     * @return void
     */
    abstract public function deleteUpload(int $upload_id): void;

    /**
     * @param int $upload_id
     * @return array
     */
    abstract public function getUpload(int $upload_id): array;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getUploadByCode(string $code): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getUploads(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalUploads(): int;
}