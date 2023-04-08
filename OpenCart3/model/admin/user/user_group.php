<?php

namespace Admin;

abstract class ModelUserUserGroup extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addUserGroup(array $data): int;

    /**
     * @param int $user_group_id
     * @param array $data
     * @return void
     */
    abstract public function editUserGroup(int $user_group_id, array $data): void;

    /**
     * @param int $user_group_id
     * @return void
     */
    abstract public function deleteUserGroup(int $user_group_id): void;

    /**
     * @param int $user_group_id
     * @return array
     */
    abstract public function getUserGroup(int $user_group_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getUserGroups(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalUserGroups(): int;

    /**
     * @param int $user_group_id
     * @param string $type
     * @param string $route
     * @return void
     */
    abstract public function addPermission(int $user_group_id, string $type, string $route): void;

    /**
     * @param int $user_group_id
     * @param string $type
     * @param string $route
     * @return void
     */
    abstract public function removePermission(int $user_group_id, string $type, string $route): void;
}