<?php
abstract class Request {
    /**
     * @var array
     */
    public array $get = array();
    /**
     * @var array
     */
    public array $post = array();
    /**
     * @var array
     */
    public array $cookie = array();
    /**
     * @var array
     */
    public array $files = array();
    /**
     * @var array
     */
    public array $server = array();

    /**
     *
     */
    public function __construct() {}

    /**
     * @param array $data
     * @return array
     */
    abstract public function clean(array $data): array;
}