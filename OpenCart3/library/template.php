<?php
abstract class Template {
    /**
     * @param string $adaptor
     */
    public function __construct(string $adaptor) {}

    /**
     * @param string $key
     * @param mixed $value
     * @return void
     */
    abstract public function set(string $key, mixed $value):void;

    /**
     * @param string $template
     * @param bool $cache
     * @return string
     */
    abstract public function render(string $template, bool $cache = false): string;
}
