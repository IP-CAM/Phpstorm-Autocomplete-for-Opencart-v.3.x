<?php

namespace Catalog;

abstract class ModelAccountSearch extends Model {
    /**
     * @param array $data
     * @return void
     */
    abstract public function addSearch(array $data): void;
}
