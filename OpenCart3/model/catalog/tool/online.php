<?php

namespace Catalog;

abstract class ModelToolOnline extends Model {
    /**
     * @param string $ip
     * @param int $customer_id
     * @param string $url
     * @param string $referer
     * @return void
     */
    abstract public function addOnline(string $ip, int $customer_id, string $url, string $referer): void;
}
