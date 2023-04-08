<?php

namespace Admin;

abstract class ModelCustomerCustomer extends Model {
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
     * @param int $customer_id
     * @param string $token
     * @return void
     */
    abstract public function editToken(int $customer_id, string $token): void;

    /**
     * @param int $customer_id
     * @return void
     */
    abstract public function deleteCustomer(int $customer_id): void;

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
     * @param array $data
     * @return array
     */
    abstract public function getCustomers(array $data = array()): array;

    /**
     * @param int $address_id
     * @return array
     */
    abstract public function getAddress(int $address_id): array;

    /**
     * @param int $customer_id
     * @return array
     */
    abstract public function getAddresses(int $customer_id): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalCustomers(array $data = array()): int;

    /**
     * @param int $tracking
     * @return array
     */
    abstract public function getAffiliateByTracking(int $tracking): array;

    /**
     * @param int $customer_id
     * @return array
     */
    abstract public function getAffiliate(int $customer_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getAffiliates(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalAffiliates(array $data = array()): int;

    /**
     * @param int $customer_id
     * @return int
     */
    abstract public function getTotalAddressesByCustomerId(int $customer_id): int;

    /**
     * @param int $country_id
     * @return int
     */
    abstract public function getTotalAddressesByCountryId(int $country_id): int;

    /**
     * @param int $zone_id
     * @return int
     */
    abstract public function getTotalAddressesByZoneId(int $zone_id): int;

    /**
     * @param int $customer_group_id
     * @return int
     */
    abstract public function getTotalCustomersByCustomerGroupId(int $customer_group_id): int;

    /**
     * @param int $customer_id
     * @param string $comment
     * @return void
     */
    abstract public function addHistory(int $customer_id, string $comment): void;

    /**
     * @param int $customer_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getHistories(int $customer_id, int $start = 0, int $limit = 10): array;

    /**
     * @param int $customer_id
     * @return int
     */
    abstract public function getTotalHistories(int $customer_id): int;

    /**
     * @param int $customer_id
     * @param string $description
     * @param string $amount
     * @param int $order_id
     * @return void
     */
    abstract public function addTransaction(int $customer_id, string $description = '', string $amount = '', int $order_id = 0): void;

    /**
     * @param int $order_id
     * @return void
     */
    abstract public function deleteTransactionByOrderId(int $order_id): void;

    /**
     * @param int $customer_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getTransactions(int $customer_id, int $start = 0, int $limit = 10): array;

    /**
     * @param int $customer_id
     * @return int
     */
    abstract public function getTotalTransactions(int $customer_id): int;

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
     * @param string $description
     * @param string $points
     * @param int $order_id
     * @return void
     */
    abstract public function addReward(int $customer_id, string $description = '', string $points = '', int $order_id = 0): void;

    /**
     * @param int $order_id
     * @return void
     */
    abstract public function deleteReward(int $order_id): void;

    /**
     * @param int $customer_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getRewards(int $customer_id, int $start = 0, int $limit = 10): array;

    /**
     * @param int $customer_id
     * @return int
     */
    abstract public function getTotalRewards(int $customer_id): int;

    /**
     * @param int $customer_id
     * @return int
     */
    abstract public function getRewardTotal(int $customer_id): int;

    /**
     * @param int $order_id
     * @return int
     */
    abstract public function getTotalCustomerRewardsByOrderId(int $order_id): int;

    /**
     * @param int $customer_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getIps(int $customer_id, int $start = 0, int $limit = 10): array;

    /**
     * @param int $customer_id
     * @return int
     */
    abstract public function getTotalIps(int $customer_id): int;

    /**
     * @param string $ip
     * @return int
     */
    abstract public function getTotalCustomersByIp(string $ip): int;

    /**
     * @param string $email
     * @return array
     */
    abstract public function getTotalLoginAttempts(string $email): array;

    /**
     * @param string $email
     * @return void
     */
    abstract public function deleteLoginAttempts(string $email): void;
}
