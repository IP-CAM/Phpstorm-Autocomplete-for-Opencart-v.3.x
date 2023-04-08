<?php
abstract class Document {
    /**
     * @param string $title
     * @return void
     */
    abstract public function setTitle(string $title): void;

    /**
     * @return string
     */
    abstract public function getTitle(): string;

    /**
     * @param string $description
     * @return void
     */
    abstract public function setDescription(string $description): void;

    /**
     * @return string
     */
    abstract public function getDescription(): string;

    /**
     * @param string $keywords
     * @return void
     */
    abstract public function setKeywords(string $keywords): void;

    /**
     * @return string
     */
    abstract public function getKeywords(): string;

    /**
     * @param string $href
     * @param string $rel
     * @return void
     */
    abstract public function addLink(string $href, string $rel): void;

    /**
     * @return array
     */
    abstract public function getLinks(): array;

    /**
     * @param string $href
     * @param string $rel
     * @param string $media
     * @param string $position
     * @return void
     */
    abstract public function addStyle(string $href, string $rel = 'stylesheet', string $media = 'screen', string $position = 'header'): void;

    /**
     * @param string $position
     * @return array
     */
    abstract public function getStyles(string $position = 'header'): array;

    /**
     * @param string $href
     * @param string $position
     * @return void
     */
    abstract public function addScript(string $href, string $position = 'header'): void;

    /**
     * @param string $position
     * @return array
     */
    abstract public function getScripts(string $position = 'header'): array;
}