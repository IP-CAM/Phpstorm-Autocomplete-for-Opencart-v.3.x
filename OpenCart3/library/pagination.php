<?php
abstract class Pagination {
    /**
     * @var int
     */
    public int $total = 0;
    /**
     * @var int
     */
    public int $page = 1;
    /**
     * @var int
     */
    public int $limit = 20;
    /**
     * @var int
     */
    public int $num_links = 8;
    /**
     * @var string
     */
    public string $url = '';
    /**
     * @var string
     */
    public string $text_first = '|&lt;';
    /**
     * @var string
     */
    public string $text_last = '&gt;|';
    /**
     * @var string
     */
    public string $text_next = '&gt;';
    /**
     * @var string
     */
    public string $text_prev = '&lt;';

    /**
     * @return string
     */
    abstract public function render(): string;
}
