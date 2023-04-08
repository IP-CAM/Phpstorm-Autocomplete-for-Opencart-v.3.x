<?php

namespace Admin;

abstract class ModelDesignLayout extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addLayout(array $data): int;

    /**
     * @param int $layout_id
     * @param array $data
     * @return void
     */
    abstract public function editLayout(int $layout_id, array $data): void;

    /**
     * @param int $layout_id
     * @return void
     */
    abstract public function deleteLayout(int $layout_id): void;

    /**
     * @param int $layout_id
     * @return array
     */
    abstract public function getLayout(int $layout_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getLayouts(array $data = array()): array;

    /**
     * @param int $layout_id
     * @return array
     */
    abstract public function getLayoutRoutes(int $layout_id): array;

    /**
     * @param int $layout_id
     * @return array
     */
    abstract public function getLayoutModules(int $layout_id): array;

    /**
     * @return int
     */
    abstract public function getTotalLayouts(): int;
}