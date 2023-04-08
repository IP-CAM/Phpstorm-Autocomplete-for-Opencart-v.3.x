<?php

namespace Admin;

abstract class ModelExtensionFraudMaxMind extends Model {
    /**
     * @return void
     */
    abstract public function install(): void;

    /**
     * @return void
     */
    abstract public function uninstall(): void;

    /**
     * @param int $order_id
     * @return array
     */
    abstract public function getOrder(int $order_id): array;
}