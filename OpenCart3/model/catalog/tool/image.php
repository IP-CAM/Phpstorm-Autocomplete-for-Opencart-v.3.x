<?php

namespace Catalog;

abstract class ModelToolImage extends Model {
    /**
     * @param string $filename
     * @param int $width
     * @param int $height
     * @return string
     */
    abstract public function resize(string $filename, int $width, int $height): string;
}
