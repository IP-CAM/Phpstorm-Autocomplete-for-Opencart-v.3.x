<?php

namespace Admin;

abstract class ModelExtensionDashboardChart extends Model {
    /**
     * @return array
     */
    abstract public function getTotalOrdersByDay(): array;

    /**
     * @return array
     */
    abstract public function getTotalOrdersByWeek(): array;

    /**
     * @return array
     */
    abstract public function getTotalOrdersByMonth(): array;

    /**
     * @return array
     */
    abstract public function getTotalOrdersByYear(): array;

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
}