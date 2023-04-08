<?php

namespace Admin;

abstract class ModelSettingEvent extends Model {
    /**
     * @param string $code
     * @param string $trigger
     * @param string $action
     * @param int $status
     * @param int $sort_order
     * @return int
     */
    abstract public function addEvent(string $code, string $trigger, string $action, int $status = 1, int $sort_order = 0): int;

    /**
     * @param int $event_id
     * @return void
     */
    abstract public function deleteEvent(int $event_id): void;

    /**
     * @param string $code
     * @return void
     */
    abstract public function deleteEventByCode(string $code): void;

    /**
     * @param int $event_id
     * @return void
     */
    abstract public function enableEvent(int $event_id): void;

    /**
     * @param int $event_id
     * @return void
     */
    abstract public function disableEvent(int $event_id): void;

    /**
     * @param string $type
     * @param string $code
     * @return void
     */
    abstract public function uninstall(string $type, string $code): void;

    /**
     * @param int $event_id
     * @return array
     */
    abstract public function getEvent(int $event_id): array;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getEventByCode(string $code): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getEvents(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalEvents(): int;
}