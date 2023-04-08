<?php

namespace Admin;

abstract class ModelExtensionDashboardMap extends Model {
    /**
     * @return array
     */
    abstract public function getTotalOrdersByCountry(): array;
}
