<?php
abstract class Loader {
    /**
     * @param Registry $registry
     */
    public function __construct(Registry $registry) {}

    /**
     * @param string $route
     * @param array $data
     * @return mixed
     */
    abstract public function controller(string $route, array $data = array()): mixed;

    /**
     * @param string $route
     * @return void
     */
    abstract public function model(string $route): void;

    /**
     * @param string $route
     * @param array $data
     * @return string
     */
    abstract public function view(string $route, array $data = array()): string;

    /**
     * @param string $route
     * @return void
     */
    abstract public function library(string $route): void;

    /**
     * @param string $route
     * @return void
     */
    abstract public function helper(string $route): void;

    /**
     * @param string $route
     * @return void
     */
    abstract public function config(string $route): void;

    /**
     * @param $route
     * @param string $key
     * @return array
     */
    abstract public function language($route, string $key = ''): array;
}