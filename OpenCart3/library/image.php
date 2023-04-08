<?php
abstract class Image {
    /**
     * @param string $file
     */
    public function __construct(string $file) {}

    /**
     * @return string
     */
    abstract public function getFile(): string;

    /**
     * @return GdImage|false
     */
    abstract public function getImage(): GdImage|false;

    /**
     * @return int
     */
    abstract public function getWidth(): int;

    /**
     * @return int
     */
    abstract public function getHeight(): int;

    /**
     * @return int
     */
    abstract public function getBits(): int;

    /**
     * @return string
     */
    abstract public function getMime(): string;

    /**
     * @param string $file
     * @param int $quality
     * @return void
     */
    abstract public function save(string $file, int $quality = 90): void;

    /**
     * @param int $width
     * @param int $height
     * @param string $default
     * @return void
     */
    abstract public function resize(int $width = 0, int $height = 0, string $default = ''): void;

    /**
     * @param string $watermark
     * @param string $position
     * @return void
     */
    abstract public function watermark(string $watermark, string $position = 'bottomright'): void;

    /**
     * @param int $top_x
     * @param int $top_y
     * @param int $bottom_x
     * @param int $bottom_y
     * @return void
     */
    abstract public function crop(int $top_x, int $top_y, int $bottom_x, int $bottom_y): void;

    /**
     * @param int $degree
     * @param string $color
     * @return void
     */
    abstract public function rotate(int $degree, string $color = 'FFFFFF'): void;
}
