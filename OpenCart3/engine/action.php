<?php
abstract class Action {
    /**
     * @param string $route
     */
    public function __construct(string $route) {}

    /**
     * @return string
     */
    abstract public function getId(): string;

    /**
     * @param Registry $registry
     * @param array $args
     * @return mixed
     */
    abstract public function execute(Registry $registry, array $args = array()): mixed;
}
