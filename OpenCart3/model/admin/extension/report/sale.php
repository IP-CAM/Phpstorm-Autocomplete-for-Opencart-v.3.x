<?php

namespace Admin;

abstract class ModelExtensionReportSale extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalSales(array $data = array()): int;

    /**
     * @return array
     */
    abstract public function getTotalOrdersByCountry(): array;

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
    abstract public function getTaxes(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalTaxes(array $data = array()): int;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getShipping(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalShipping(array $data = array()): int;
}