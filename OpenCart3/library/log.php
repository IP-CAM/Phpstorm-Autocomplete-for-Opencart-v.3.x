<?php
class Log {
    /**
     * @param string $filename
     */
    public function __construct(string $filename) {}

    /**
     * @param string $message
     * @return void
     */
    public function write(string $message): void {}

    /**
     *
     */
    public function __destruct() {}
}