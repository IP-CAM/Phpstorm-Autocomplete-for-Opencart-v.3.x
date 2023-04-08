<?php
abstract class Event {
    /**
     * @param Registry $registry
     */
    public function __construct(Registry $registry) {}

    /**
     * @param $trigger
     * @param Action $action
     * @param $priority
     * @return mixed
     */
    abstract public function register($trigger, Action $action, $priority = 0);

    /**
     * @param $event
     * @param array $args
     * @return mixed
     */
    abstract public function trigger($event, array $args = array());

    /**
     * @param $trigger
     * @param $route
     * @return mixed
     */
    abstract public function unregister($trigger, $route);

    /**
     * @param $trigger
     * @return mixed
     */
    abstract public function clear($trigger);
}