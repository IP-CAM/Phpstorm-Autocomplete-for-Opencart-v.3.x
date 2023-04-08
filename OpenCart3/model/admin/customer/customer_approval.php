<?php

namespace Admin;

abstract class ModelCustomerCustomerApproval extends Model {
    /**
     * @param array $data
     * @return array
     */
    abstract public function getCustomerApprovals(array $data = array()): array;

    /**
     * @param int $customer_approval_id
     * @return array
     */
    abstract public function getCustomerApproval(int $customer_approval_id): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalCustomerApprovals(array $data = array()): int;

    /**
     * @param int $customer_id
     * @return void
     */
    abstract public function approveCustomer(int $customer_id): void;

    /**
     * @param int $customer_id
     * @return void
     */
    abstract public function denyCustomer(int $customer_id): void;

    /**
     * @param int $customer_id
     * @return void
     */
    abstract public function approveAffiliate(int $customer_id): void;

    /**
     * @param int $customer_id
     * @return void
     */
    abstract public function denyAffiliate(int $customer_id): void;
}