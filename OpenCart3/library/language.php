<?php
abstract class Language {
    /**
     * @var array
     */
    public array $data;

    /**
     * @param string $directory
     */
    public function __construct(string $directory = '') {}

    /**
     * @param string $key
     * @return string
     */
    abstract public function get(string $key): string;

    /**
     * @param string $key
     * @param string $value
     * @return void
     */
    abstract public function set(string $key, string $value): void;

    /**
     * @return array
     */
    abstract public function all(): array;

    /**
     * @param string $filename
     * @param string $key
     * @return array
     */
    abstract public function load(string $filename, string $key = ''): array;
}