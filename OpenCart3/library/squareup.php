<?php
abstract class Squareup {
    const API_URL = 'https://connect.squareup.com';
    const API_VERSION = 'v2';
    const ENDPOINT_ADD_CARD = 'customers/%s/cards';
    const ENDPOINT_AUTH = 'oauth2/authorize';
    const ENDPOINT_CAPTURE_TRANSACTION = 'locations/%s/transactions/%s/capture';
    const ENDPOINT_CUSTOMERS = 'customers';
    const ENDPOINT_DELETE_CARD = 'customers/%s/cards/%s';
    const ENDPOINT_GET_TRANSACTION = 'locations/%s/transactions/%s';
    const ENDPOINT_LOCATIONS = 'locations';
    const ENDPOINT_REFRESH_TOKEN = 'oauth2/clients/%s/access-token/renew';
    const ENDPOINT_REFUND_TRANSACTION = 'locations/%s/transactions/%s/refund';
    const ENDPOINT_TOKEN = 'oauth2/token';
    const ENDPOINT_TRANSACTIONS = 'locations/%s/transactions';
    const ENDPOINT_VOID_TRANSACTION = 'locations/%s/transactions/%s/void';
    const PAYMENT_FORM_URL = 'https://js.squareup.com/v2/paymentform';
    const SCOPE = 'MERCHANT_PROFILE_READ PAYMENTS_READ SETTLEMENTS_READ CUSTOMERS_READ CUSTOMERS_WRITE';
    const VIEW_TRANSACTION_URL = 'https://squareup.com/dashboard/sales/transactions/%s/by-unit/%s';
    const SQUARE_INTEGRATION_ID = 'sqi_65a5ac54459940e3600a8561829fd970';

    /**
     * @param Registry $registry
     */
    public function __construct(Registry $registry) {}

    /**
     * @param array $request_data
     * @return array
     */
    abstract public function api(array $request_data): array;

    /**
     * @param string $access_token
     * @return bool
     */
    abstract public function verifyToken(string $access_token): bool;

    /**
     * @param string $client_id
     * @return string
     */
    abstract public function authLink(string $client_id): string;

    /**
     * @param string $access_token
     * @param int|null $first_location_id
     * @return array
     */
    abstract public function fetchLocations(string $access_token, ?int &$first_location_id): array;

    /**
     * @param string $code
     * @return array
     */
    abstract public function exchangeCodeForAccessToken(string $code): array;

    /**
     * @param string $text
     * @return void
     */
    abstract public function debug(string $text): void;

    /**
     * @return array
     */
    abstract public function refreshToken(): array;

    /**
     * @param string $square_customer_id
     * @param array $card_data
     * @return array
     */
    abstract public function addCard(string $square_customer_id, array $card_data): array;

    /**
     * @return array
     */
    abstract public function addLoggedInCustomer(): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function addTransaction(array $data): array;

    /**
     * @param string $location_id
     * @param string $transaction_id
     * @return array
     */
    abstract public function getTransaction(string $location_id, string $transaction_id): array;

    /**
     * @param string $location_id
     * @param string $transaction_id
     * @return array
     */
    abstract public function captureTransaction(string $location_id, string $transaction_id): array;

    /**
     * @param string $location_id
     * @param string $transaction_id
     * @return array
     */
    abstract public function voidTransaction(string $location_id, string $transaction_id): array;

    /**
     * @param string $location_id
     * @param string $transaction_id
     * @param string $reason
     * @param float $amount
     * @param string $currency
     * @param string $tender_id
     * @return array
     */
    abstract public function refundTransaction(string $location_id, string $transaction_id, string $reason, float $amount, string $currency, string $tender_id): array;

    /**
     * @param float $value
     * @param string $currency
     * @return int
     */
    abstract public function lowestDenomination(float $value, string $currency): int;

    /**
     * @param int $value
     * @param string $currency
     * @return float
     */
    abstract public function standardDenomination(int $value, string $currency): float;
}