<?php

namespace Admin;

abstract class ModelExtensionReportCustomer extends Model {
    /**
     * @return array
     */
    abstract public function getTotalCustomersByDay(): array;

    /**
     * @return array
     */
    abstract public function getTotalCustomersByWeek(): array;

    /**
     * @return array
     */
    abstract public function getTotalCustomersByMonth(): array;

    /**
     * @return array
     */
    abstract public function getTotalCustomersByYear(): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getOrders(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalOrders(array $data = array()): int;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getRewardPoints(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalRewardPoints(array $data = array()): int;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getCustomerActivities(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalCustomerActivities(array $data = array()): int;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getCustomerSearches(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalCustomerSearches(array $data = array()): int;
}
