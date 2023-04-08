<?php

namespace Admin;

abstract class ModelSettingModification extends Model {
    /**
     * @param array $data
     * @return void
     */
    abstract public function addModification(array $data): void;

    /**
     * @param int $modification_id
     * @return void
     */
    abstract public function deleteModification(int $modification_id): void;

    /**
     * @param int $extension_install_id
     * @return void
     */
    abstract public function deleteModificationsByExtensionInstallId(int $extension_install_id): void;

    /**
     * @param int $modification_id
     * @return void
     */
    abstract public function enableModification(int $modification_id): void;

    /**
     * @param int $modification_id
     * @return void
     */
    abstract public function disableModification(int $modification_id): void;

    /**
     * @param int $modification_id
     * @return array
     */
    abstract public function getModification(int $modification_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getModifications(array $data = array()): array;

    /**
     * @return int
     */
    abstract public function getTotalModifications(): int;

    /**
     * @param string $code
     * @return array
     */
    abstract public function getModificationByCode(string $code): array;
}