<?php

namespace Admin;

abstract class ModelLocalisationReturnAction extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addReturnAction(array $data): int;

    /**
     * @param int $return_action_id
     * @param array $data
     * @return void
     */
    abstract public function editReturnAction(int $return_action_id, array $data): void;

    /**
     * @param int $return_action_id
     * @return void
     */
    abstract public function deleteReturnAction(int $return_action_id): void;

    /**
     * @param int $return_action_id
     * @return array
     */
    abstract public function getReturnAction(int $return_action_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getReturnActions(array $data = array()): array;

    /**
     * @param int $return_action_id
     * @return array
     */
    abstract public function getReturnActionDescriptions(int $return_action_id): array;

    /**
     * @return int
     */
    abstract public function getTotalReturnActions(): int;
}