<?php

namespace Admin;

abstract class ModelUserUser extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addUser(array $data): int;

    /**
     * @param int $user_id
     * @param array $data
     * @return void
     */
    abstract public function editUser(int $user_id, array $data): void;

    /**
     * @param int $user_id
     * @param string $password
     * @return void
     */
    abstract public function editPassword(int $user_id, string $password): void;

    /**
     * @param string $email
     * @param string $code
     * @return void
     */
    abstract public function editCode(string $email, string $code): void;

    /**
     * @param int $user_id
     * @return void
     */
    abstract public function deleteUser(int $user_id): void;

    /**
     * @param int $user_id
     * @return array
     */
    abstract public function getUser(int $user_id): array;

    /**
     * @param string $username
     * @return array
     */
    abstract public function getUserByUsername(string $username): array;

    /**
     * @param string $email
     * @return array
     */
    abstract public function getUserByEmail(string $email): array;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getUserByCode(string $code): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getUsers(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalUsers(): int;

    /**
     * @param int $user_group_id
     * @return int
     */
    abstract public function getTotalUsersByGroupId(int $user_group_id): int;

    /**
     * @param string $email
     * @return int
     */
    abstract public function getTotalUsersByEmail(string $email): int;

    /**
     * @param string $username
     * @return void
     */
    abstract public function addLoginAttempt(string $username): void;

    /**
     * @param string $username
     * @return array
     */
    abstract public function getLoginAttempts(string $username): array;

    /**
     * @param string $username
     * @return void
     */
    abstract public function deleteLoginAttempts(string $username): void;
}