<?php

namespace Catalog;

abstract class ModelExtensionModulePayPalSmartButton extends Model {
    /**
     * @param int $product_id
     * @param array $option
     * @param int $recurring_id
     * @return int
     */
    abstract public function hasProductInCart(int $product_id, array $option = array(), int $recurring_id = 0): int;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getCountryByCode(string $code): array;

    /**
     * @param int $country_id
     * @param string $code
     * @return array
     */
    abstract public function getZoneByCode(int $country_id, string $code): array;

    /**
     * @param array $data
     * @param string|null $title
     * @return void
     */
    abstract public function log(array $data, string $title = null): void;
}
