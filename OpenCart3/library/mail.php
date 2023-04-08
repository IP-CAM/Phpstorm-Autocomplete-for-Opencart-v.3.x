<?php
abstract class Mail {
    /**
     * @var string
     */
    public string $parameter;

    /**
     * @param string $adaptor
     */
    public function __construct(string $adaptor = 'mail') {}

    /**
     * @param string $to
     * @return void
     */
    abstract public function setTo(string $to): void;

    /**
     * @param string $from
     * @return void
     */
    abstract public function setFrom(string $from): void;

    /**
     * @param string $sender
     * @return void
     */
    abstract public function setSender(string $sender): void;

    /**
     * @param string $reply_to
     * @return void
     */
    abstract public function setReplyTo(string $reply_to): void;

    /**
     * @param string $subject
     * @return void
     */
    abstract public function setSubject(string $subject): void;

    /**
     * @param string $text
     * @return void
     */
    abstract public function setText(string $text): void;

    /**
     * @param string $html
     * @return void
     */
    abstract public function setHtml(string $html): void;

    /**
     * @param string $filename
     * @return void
     */
    abstract public function addAttachment(string $filename): void;

    /**
     * @return void
     */
    abstract public function send(): void;
}