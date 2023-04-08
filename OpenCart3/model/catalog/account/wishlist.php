<?php

namespace Catalog;

abstract class ModelAccountWishlist extends Model {
    /**
     * @param int $product_id
     * @return void
     */
    abstract public function addWishlist(int $product_id): void;

    /**
     * @param int $product_id
     * @return void
     */
    abstract public function deleteWishlist(int $product_id): void;

    /**
     * @return array
     */
    abstract public function getWishlist(): array;

    /**
     * @return int
     */
    abstract public function getTotalWishlist(): int;
}
