<?php
abstract class Config {
    /**
     * @param string $key
     * @return mixed
     */
    abstract public function get(string $key): mixed;

    /**
     * @param string $key
     * @param mixed $value
     * @return void
     */
    abstract public function set(string $key, mixed $value): void;

    /**
     * @param string $key
     * @return bool
     */
    abstract public function has(string $key): bool;

    /**
     * @param string $filename
     * @return void
     */
    abstract public function load(string $filename): void;
}