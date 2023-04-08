<?php

namespace Admin;

abstract class ModelExtensionReportActivity extends Model {
    /**
     * @return array
     */
    abstract public function getActivities(): array;
}