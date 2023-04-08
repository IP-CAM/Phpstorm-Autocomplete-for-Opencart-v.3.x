<?php
abstract class Session {
    /**
     * @var array
     */
    public array $data = array();

    /**
     * @param string $adaptor
     * @param Registry|null $registry
     */
    public function __construct(string $adaptor, Registry $registry = null) {}

    /**
     * @return string
     */
    abstract public function getId(): string;

    /**
     * @param string $session_id
     * @return string
     */
    abstract public function start(string $session_id = ''): string;

    /**
     * @return void
     */
    abstract public function close(): void;

    /**
     * @return void
     */
    abstract public function destroy(): void;
}
