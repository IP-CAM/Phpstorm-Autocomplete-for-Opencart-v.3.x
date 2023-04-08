<?php

namespace Catalog;

abstract class ModelToolUpload extends Model {
    /**
     * @param string $name
     * @param string $filename
     * @return string
     */
    abstract public function addUpload(string $name, string $filename): string;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getUploadByCode(string $code): array;
}