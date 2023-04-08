<?php


namespace Catalog;

abstract class ModelExtensionCreditCardSquareup extends Model {
    /**
     * @param array $data
     * @return void
     */
    abstract public function addCustomer(array $data): void;

    /**
     * @param int $customer_id
     * @param int $sandbox
     * @return \Query
     */
    abstract public function getCustomer(int $customer_id, int $sandbox): \Query;

    /**
     * @param int $customer_id
     * @param int $sandbox
     * @param array $data
     * @return void
     */
    abstract public function addCard(int $customer_id, int $sandbox, array $data): void;

    /**
     * @param int $squareup_token_id
     * @return \Query
     */
    abstract public function getCard(int $squareup_token_id): \Query;

    /**
     * @param int $customer_id
     * @param int $sandbox
     * @return \Query
     */
    abstract public function getCards(int $customer_id, int $sandbox): \Query;

    /**
     * @param int $customer_id
     * @param array $data
     * @return \Query
     */
    abstract public function cardExists(int $customer_id, array $data): \Query;

    /**
     * @param int $squareup_token_id
     * @param int $customer_id
     * @return \Query
     */
    abstract public function verifyCardCustomer(int $squareup_token_id, int $customer_id): \Query;

    /**
     * @param int $squareup_token_id
     * @return \Query
     */
    abstract public function deleteCard(int $squareup_token_id): \Query;
}