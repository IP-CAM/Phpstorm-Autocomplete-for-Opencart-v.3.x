<?php

namespace Admin;

abstract class ModelSettingExtension extends Model {
    /**
     * @param string $type
     * @return array
     */
    abstract public function getInstalled(string $type): array;

    /**
     * @param string $type
     * @param string $code
     * @return void
     */
    abstract public function install(string $type, string $code): void;

    /**
     * @param string $type
     * @param string $code
     * @return void
     */
    abstract public function uninstall(string $type, string $code): void;

    /**
     * @param string $filename
     * @param int $extension_download_id
     * @return mixed
     */
    abstract public function addExtensionInstall(string $filename, int $extension_download_id = 0);

    /**
     * @param int $extension_install_id
     * @return void
     */
    abstract public function deleteExtensionInstall(int $extension_install_id): void;

    /**
     * @param int $start
     * @param int $limit
     * @return array
     */
    abstract public function getExtensionInstalls(int $start = 0, int $limit = 10): array;

    /**
     * @param int $extension_download_id
     * @return array
     */
    abstract public function getExtensionInstallByExtensionDownloadId(int $extension_download_id): array;

    /**
     * @return int
     */
    abstract public function getTotalExtensionInstalls(): int;

    /**
     * @param int $extension_install_id
     * @param string $path
     * @return mixed
     */
    abstract public function addExtensionPath(int $extension_install_id, string $path);

    /**
     * @param int $extension_path_id
     * @return void
     */
    abstract public function deleteExtensionPath(int $extension_path_id): void;

    /**
     * @param int $extension_install_id
     * @return array
     */
    abstract public function getExtensionPathsByExtensionInstallId(int $extension_install_id): array;
}