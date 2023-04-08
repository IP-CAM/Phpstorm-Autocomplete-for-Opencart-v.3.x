<?php

abstract class Query {
    public int $num_rows;
    public array $row;
    public array $rows;
}

abstract class DB {
    /**
     * @param string $adaptor
     * @param string $hostname
     * @param string $username
     * @param string $password
     * @param string $database
     * @param int|NULL $port
     */
    public function __construct(string $adaptor, string $hostname, string $username, string $password, string $database, int $port = NULL) {}

    /**
     * @param string $sql
     * @return Query|bool
     */
    abstract public function query(string $sql): Query|bool;

    /**
     * @param string $value
     * @return string
     */
    abstract public function escape(string $value): string;

    /**
     * @return int
     */
    abstract public function countAffected(): int;

    /**
     * @return int
     */
    abstract public function getLastId(): int;

    /**
     * @return bool
     */
    abstract public function connected(): bool;
}