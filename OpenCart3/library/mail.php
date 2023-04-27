<?php
class Mail {
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
    public function setTo(string $to): void {}

    /**
     * @param string $from
     * @return void
     */
    public function setFrom(string $from): void {}

    /**
     * @param string $sender
     * @return void
     */
    public function setSender(string $sender): void {}

    /**
     * @param string $reply_to
     * @return void
     */
    public function setReplyTo(string $reply_to): void {}

    /**
     * @param string $subject
     * @return void
     */
    public function setSubject(string $subject): void {}

    /**
     * @param string $text
     * @return void
     */
    public function setText(string $text): void {}

    /**
     * @param string $html
     * @return void
     */
    public function setHtml(string $html): void {}

    /**
     * @param string $filename
     * @return void
     */
    public function addAttachment(string $filename): void {}

    /**
     * @return void
     */
    public function send(): void {}
}