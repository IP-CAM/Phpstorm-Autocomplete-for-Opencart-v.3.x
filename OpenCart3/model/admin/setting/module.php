<?php

namespace Admin;

abstract class ModelSettingModule extends Model {
    /**
     * @param string $code
     * @param array $data
     * @return void
     */
    abstract public function addModule(string $code, array $data): void;

    /**
     * @param int $module_id
     * @param array $data
     * @return void
     */
    abstract public function editModule(int $module_id, array $data): void;

    /**
     * @param int $module_id
     * @return void
     */
    abstract public function deleteModule(int $module_id): void;

    /**
     * @param int $module_id
     * @return array
     */
    abstract public function getModule(int $module_id): array;

    /**
     * @return array
     */
    abstract public function getModules(): array;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getModulesByCode(string $code): array;

    /**
     * @param string $code
     * @return void
     */
    abstract public function deleteModulesByCode(string $code): void;
}