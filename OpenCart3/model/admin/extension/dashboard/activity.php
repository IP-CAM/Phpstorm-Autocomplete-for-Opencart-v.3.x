<?php

namespace Admin;

abstract class ModelExtensionDashboardActivity extends Model {
    /**
     * @return array
     */
    abstract public function getActivities(): array;
}