<?php

namespace Catalog;

abstract class ModelSettingEvent extends Model {
    /**
     * @return array
     */
    abstract public function getEvents(): array;
}