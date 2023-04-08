<?php

namespace Catalog;

use http\Exception\BadMessageException;

abstract class ModelExtensionTotalVoucherTheme extends Model {
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
}
