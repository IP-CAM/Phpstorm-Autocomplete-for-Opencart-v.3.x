<?php

namespace Admin;

abstract class ModelLocalisationCurrency extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addCurrency(array $data): int;

    /**
     * @param int $currency_id
     * @param array $data
     * @return void
     */
    abstract public function editCurrency(int $currency_id, array $data): void;

    /**
     * @param int $currency_id
     * @return void
     */
    abstract public function deleteCurrency(int $currency_id): void;

    /**
     * @param int $currency_id
     * @return array
     */
    abstract public function getCurrency(int $currency_id): array;

    /**
     * @param string $currency
     * @return array
     */
    abstract public function getCurrencyByCode(string $currency): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getCurrencies(array $data = array()): array;

    /**
     * @param bool $force
     * @return void
     */
    abstract public function refresh(bool $force = false): void;

    /**
     * @return int
     */
    abstract public function getTotalCurrencies(): int;
}