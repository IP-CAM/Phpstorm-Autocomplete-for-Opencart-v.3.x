<?php

namespace Catalog;

abstract class ModelAccountCustomer extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addCustomer(array $data): int;

    /**
     * @param int $customer_id
     * @param array $data
     * @return void
     */
    abstract public function editCustomer(int $customer_id, array $data): void;

    /**
     * @param string $email
     * @param string $password
     * @return void
     */
    abstract public function editPassword(string $email, string $password): void;

    /**
     * @param int $customer_id
     * @param int $address_id
     * @return void
     */
    abstract public function editAddressId(int $customer_id, int $address_id): void;

    /**
     * @param string $email
     * @param string $code
     * @return void
     */
    abstract public function editCode(string $email, string $code): void;

    /**
     * @param int $newsletter
     * @return void
     */
    abstract public function editNewsletter(int $newsletter): void;

    /**
     * @param int $customer_id
     * @return array
     */
    abstract public function getCustomer(int $customer_id): array;

    /**
     * @param string $email
     * @return array
     */
    abstract public function getCustomerByEmail(string $email): array;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getCustomerByCode(string $code): array;

    /**
     * @param string $token
     * @return array
     */
    abstract public function getCustomerByToken(string $token): array;

    /**
     * @param string $email
     * @return int
     */
    abstract public function getTotalCustomersByEmail(string $email): int;

    /**
     * @param int $customer_id
     * @param string $description
     * @param float $amount
     * @param int $order_id
     * @return void
     */
    abstract public function addTransaction(int $customer_id, string $description, float $amount = 0, int $order_id = 0): void;

    /**
     * @param int $order_id
     * @return void
     */
    abstract public function deleteTransactionByOrderId(int $order_id): void;

    /**
     * @param int $customer_id
     * @return int
     */
    abstract public function getTransactionTotal(int $customer_id): int;

    /**
     * @param int $order_id
     * @return int
     */
    abstract public function getTotalTransactionsByOrderId(int $order_id): int;

    /**
     * @param int $customer_id
     * @return int
     */
    abstract public function getRewardTotal(int $customer_id): int;

    /**
     * @param int $customer_id
     * @return array
     */
    abstract public function getIps(int $customer_id): array;

    /**
     * @param string $email
     * @return void
     */
    abstract public function addLoginAttempt(string $email): void;

    /**
     * @param string $email
     * @return array
     */
    abstract public function getLoginAttempts(string $email): array;

    /**
     * @param string $email
     * @return void
     */
    abstract public function deleteLoginAttempts(string $email): void;

    /**
     * @param int $customer_id
     * @param array $data
     * @return void
     */
    abstract public function addAffiliate(int $customer_id, array $data): void;

    /**
     * @param int $customer_id
     * @param array $data
     * @return void
     */
    abstract public function editAffiliate(int $customer_id, array $data): void;

    /**
     * @param int $customer_id
     * @return array
     */
    abstract public function getAffiliate(int $customer_id): array;

    /**
     * @param string $tracking
     * @return array
     */
    abstract public function getAffiliateByTracking(string $tracking): array;
}