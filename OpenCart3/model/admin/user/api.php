<?php

namespace Admin;

abstract class ModelUserApi extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addApi(array $data): int;

    /**
     * @param int $api_id
     * @param array $data
     * @return void
     */
    abstract public function editApi(int $api_id, array $data): void;

    /**
     * @param int $api_id
     * @return void
     */
    abstract public function deleteApi(int $api_id): void;

    /**
     * @param int $api_id
     * @return array
     */
    abstract public function getApi(int $api_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getApis(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalApis(): int;

    /**
     * @param int $api_id
     * @param string $ip
     * @return void
     */
    abstract public function addApiIp(int $api_id, string $ip): void;

    /**
     * @param int $api_id
     * @return array
     */
    abstract public function getApiIps(int $api_id): array;

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
    abstract public function getApiSessions(int $api_id): array;

    /**
     * @param int $api_session_id
     * @return void
     */
    abstract public function deleteApiSession(int $api_session_id): void;

    /**
     * @param string $session_id
     * @return void
     */
    abstract public function deleteApiSessionBySessionId(string $session_id): void;
}
