<?php

namespace Admin;

abstract class ModelDesignSeoUrl extends Model {
    /**
     * @param array $data
     * @return void
     */
    abstract public function addSeoUrl(array $data): void;

    /**
     * @param int $seo_url_id
     * @param array $data
     * @return void
     */
    abstract public function editSeoUrl(int $seo_url_id, array $data): void;

    /**
     * @param int $seo_url_id
     * @return void
     */
    abstract public function deleteSeoUrl(int $seo_url_id): void;

    /**
     * @param int $seo_url_id
     * @return array
     */
    abstract public function getSeoUrl(int $seo_url_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getSeoUrls(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalSeoUrls(array $data = array()): int;

    /**
     * @param string $keyword
     * @return array
     */
    abstract public function getSeoUrlsByKeyword(string $keyword): array;

    /**
     * @param string $query
     * @return array
     */
    abstract public function getSeoUrlsByQuery(string $query): array;

    /**
     * @param int $seo_url_id
     * @param string $query
     * @return array
     */
    abstract public function getSeoUrlsByQueryId(int $seo_url_id, string $query): array;

    /**
     * @param int $seo_url_id
     * @param string $keyword
     * @return array
     */
    abstract public function getSeoUrlsByKeywordId(int $seo_url_id, string $keyword): array;
}