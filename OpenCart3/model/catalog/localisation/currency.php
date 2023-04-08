<?php

namespace Catalog;

abstract class ModelLocalisationCurrency extends Model {
    /**
     * @param string $currency
     * @return array
     */
    abstract public function getCurrencyByCode(string $currency): array;

    /**
     * @return array
     */
    abstract public function getCurrencies(): array;
}
