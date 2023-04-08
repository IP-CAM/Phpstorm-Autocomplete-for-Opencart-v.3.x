<?php

namespace Catalog;

abstract class ModelDesignBanner extends Model {
    /**
     * @param int $banner_id
     * @return array
     */
    abstract public function getBanner(int $banner_id): array;
}
