<?php

namespace Admin;

abstract class ModelExtensionFraudIp extends Model {
    /**
     * @return void
     */
    abstract public function install(): void;

    /**
     * @return void
     */
    abstract public function uninstall(): void;

    /**
     * @param string $ip
     * @return void
     */
    abstract public function addIp(string $ip): void;

    /**
     * @param string $ip
     * @return void
     */
    abstract public function removeIp(string $ip): void;

    /**
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getIps(int $start = 0, int $limit = 10): array;

    /**
     * @return int
     */
    abstract public function getTotalIps(): int;

    /**
     * @param string $ip
     * @return int
     */
    abstract public function getTotalIpsByIp(string $ip): int;
}
