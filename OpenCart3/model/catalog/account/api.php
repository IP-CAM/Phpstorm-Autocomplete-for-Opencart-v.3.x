<?php

namespace Catalog;

abstract class ModelAccountApi extends Model {
    /**
     * @param string $username
     * @param string $key
     * @return array
     */
    abstract public function login(string $username, string $key): array;

    /**
     * @param int $api_id
     * @param string $session_id
     * @param string $ip
     * @return int
     */
    abstract public function addApiSession(int $api_id, string $session_id, string $ip): int;

    /**
     * @param int $api_id
     * @return array
     */
    abstract public function getApiIps(int $api_id): array;
}
