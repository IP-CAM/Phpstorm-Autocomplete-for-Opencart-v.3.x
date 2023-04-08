<?php
abstract class Encryption {
    /**
     * @param string $key
     * @param string $value
     * @return string
     */
    abstract public function encrypt(string $key, string $value): string;

    /**
     * @param string $key
     * @param string $values
     * @return string
     */
    abstract public function decrypt(string $key, string $values): string;
}