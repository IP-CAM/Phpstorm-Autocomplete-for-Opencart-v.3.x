<?php

namespace Admin;

abstract class ModelDesignTheme extends Model {
    /**
     * @param int $store_id
     * @param string $theme
     * @param string $route
     * @param string $code
     * @return void
     */
    abstract public function editTheme(int $store_id, string $theme, string $route, string $code): void;

    /**
     * @param int $theme_id
     * @return void
     */
    abstract public function deleteTheme(int $theme_id): void;

    /**
     * @param int $store_id
     * @param string $theme
     * @param string $route
     * @return array
     */
    abstract public function getTheme(int $store_id, string $theme, string $route): array;

    /**
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getThemes(int $start = 0, int $limit = 10): array;

    /**
     * @return int
     */
    abstract public function getTotalThemes(): int;
}