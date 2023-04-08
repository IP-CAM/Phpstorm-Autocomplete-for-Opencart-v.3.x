<?php

namespace Catalog;

abstract class ModelExtensionFeedGoogleBase extends Model {
    /**
     * @return array
     */
    abstract public function getCategories(): array;

    /**
     * @return int
     */
    abstract public function getTotalCategories(): int;
}
