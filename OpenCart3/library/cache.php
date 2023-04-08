<?php
abstract class Cache {
    /**
     * @param string $adaptor
     * @param int $expire
     */
    public function __construct(string $adaptor, int $expire = 3600) {}

    /**
     * @param string $key
     * @return string
     */
    abstract public function get(string $key): string;

    /**
     * @param string $key
     * @param string $value
     * @return string
     */
    abstract public function set(string $key, string $value): string;

    /**
     * @param string $key
     * @return void
     */
    abstract public function delete(string $key): void;
}
