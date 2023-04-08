<?php

namespace Admin;

abstract class ModelSaleVoucher extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addVoucher(array $data): int;

    /**
     * @param int $voucher_id
     * @param array $data
     * @return void
     */
    abstract public function editVoucher(int $voucher_id, array $data): void;

    /**
     * @param int $voucher_id
     * @return void
     */
    abstract public function deleteVoucher(int $voucher_id): void;

    /**
     * @param int $voucher_id
     * @return array
     */
    abstract public function getVoucher(int $voucher_id): array;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getVoucherByCode(string $code): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getVouchers(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalVouchers(): int;

    /**
     * @param int $voucher_theme_id
     * @return int
     */
    abstract public function getTotalVouchersByVoucherThemeId(int $voucher_theme_id): int;

    /**
     * @param int $voucher_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getVoucherHistories(int $voucher_id, int $start = 0, int $limit = 10): array;

    /**
     * @param int $voucher_id
     * @return int
     */
    abstract public function getTotalVoucherHistories(int $voucher_id): int;
}
