<?php
abstract class Router {
    /**
     * @param Registry $registry
     */
    public function __construct(Registry $registry) {}

    /**
     * @param Action $pre_action
     * @return void
     */
    abstract public function addPreAction(Action $pre_action): void;

    /**
     * @param Action $action
     * @param Action $error
     * @return void
     */
    abstract public function dispatch(Action $action, Action $error): void;
}