<?php


namespace Catalog;

abstract class ModelExtensionModuleAmazonLogin extends Model {
    /**
     *
     */
    const LOG_FILENAME = "amazon_login.log";
    /**
     *
     */
    const URL_PROFILE = "https://%s/user/profile";
    /**
     *
     */
    const URL_TOKENINFO = "https://%s/auth/o2/tokeninfo?access_token=%s";

    /**
     * @param string $access_token
     * @return mixed
     */
    abstract public function fetchProfile(string $access_token): mixed;

    /**
     * @param $access_token
     * @return bool|null
     */
    abstract public function verifyAccessToken($access_token): ?bool;

    /**
     * @param mixed $amazon_profile
     * @return array
     */
    abstract public function loginProfile(mixed $amazon_profile): array;

    /**
     * @param string $address
     * @return void
     */
    abstract public function persistAddress(string $address): void;

    /**
     * @param string $new
     * @param string $addresses
     * @return bool
     */
    abstract public function addressMatches(string $new, string $addresses): bool;

    /**
     * @param array $a1
     * @param array $a2
     * @param array $keys
     * @return bool
     */
    abstract public function addressMatch(array $a1, array $a2, array $keys): bool;

    /**
     * @param array $customer_info
     * @return void
     */
    abstract public function forceLoginCustomer(array $customer_info): void;

    /**
     * @return string
     */
    abstract public function getApiDomainName(): string;

    /**
     * @param string $url
     * @param array $headers
     * @return mixed
     */
    abstract public function curlGet(string $url, array $headers = array()): mixed;

    /**
     * @param string $type
     * @param array $data
     * @return void
     */
    abstract public function debugLog(string $type, array $data): void;
}
