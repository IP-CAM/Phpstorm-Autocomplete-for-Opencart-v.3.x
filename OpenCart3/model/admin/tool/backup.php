<?php

namespace Admin;

abstract class ModelToolBackup extends Model {
    /**
     * @return array
     */
    abstract public function getTables(): array;

    /**
     * @param array $tables
     * @return string
     */
    abstract public function backup(array $tables): string;
}