<?php

namespace Catalog;

abstract class ModelAccountRecurring extends Model {
    /**
     * @param int $order_recurring_id
     * @return array
     */
    abstract public function getOrderRecurring(int $order_recurring_id): array;

    /**
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getOrderRecurrings(int $start = 0, int $limit = 20): array;

    /**
     * @param string $reference
     * @return array
     */
    abstract public function getOrderRecurringByReference(string $reference): array;

    /**
     * @param int $order_recurring_id
     * @return array
     */
    abstract public function getOrderRecurringTransactions(int $order_recurring_id): array;

    /**
     * @return int
     */
    abstract public function getTotalOrderRecurrings(): int;

    /**
     * @param int $order_recurring_id
     * @param int $type
     * @return void
     */
    abstract public function addOrderRecurringTransaction(int $order_recurring_id, int $type): void;

    /**
     * @param int $order_recurring_id
     * @param int $status
     * @return void
     */
    abstract public function editOrderRecurringStatus(int $order_recurring_id, int $status): void;
}