<?php

namespace Admin;

abstract class ModelSaleRecurring extends Model {
    /**
     * @param array $data
     * @return array
     */
    abstract public function getRecurrings(array $data): array;

    /**
     * @param int $order_recurring_id
     * @return array
     */
    abstract public function getRecurring(int $order_recurring_id): array;

    /**
     * @param int $order_recurring_id
     * @return array
     */
    abstract public function getRecurringTransactions(int $order_recurring_id): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalRecurrings(array $data): int;
}
