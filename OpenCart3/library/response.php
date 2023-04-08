<?php
abstract class Response {
    /**
     * @param string $header
     * @return void
     */
    abstract public function addHeader(string $header): void;

    /**
     * @param string $url
     * @param int $status
     * @return void
     */
    abstract public function redirect(string $url, int $status = 302): void;

    /**
     * @param int $level
     * @return void
     */
    abstract public function setCompression(int $level): void;

    /**
     * @return string
     */
    abstract public function getOutput(): string;

    /**
     * @param string $output
     * @return void
     */
    abstract public function setOutput(string $output): void;

    /**
     * @return void
     */
    abstract public function output(): void;
}
