<?php

namespace Admin;

abstract class ModelSaleVoucherTheme extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addVoucherTheme(array $data): int;

    /**
     * @param int $voucher_theme_id
     * @param array $data
     * @return void
     */
    abstract public function editVoucherTheme(int $voucher_theme_id, array $data): void;

    /**
     * @param int $voucher_theme_id
     * @return void
     */
    abstract public function deleteVoucherTheme(int $voucher_theme_id): void;

    /**
     * @param int $voucher_theme_id
     * @return array
     */
    abstract public function getVoucherTheme(int $voucher_theme_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getVoucherThemes(array $data = array()): array;

    /**
     * @param int $voucher_theme_id
     * @return array
     */
    abstract public function getVoucherThemeDescriptions(int $voucher_theme_id): array;

    /**
     * @return int
     */
    abstract public function getTotalVoucherThemes(): int;
}