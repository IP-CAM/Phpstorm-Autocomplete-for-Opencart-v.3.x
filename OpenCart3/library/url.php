<?php
abstract class Url {
    /**
     * @param string $url
     * @param string $ssl
     */
    public function __construct(string $url, string $ssl = '') {}

    /**
     * @param object $rewrite
     * @return void
     */
    abstract public function addRewrite(object $rewrite): void;

    /**
     * @param string $route
     * @param string $args
     * @param bool $secure
     * @return string
     */
    abstract public function link(string $route, string $args = '', bool $secure = false): string;
}