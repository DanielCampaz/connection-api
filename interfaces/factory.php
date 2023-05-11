<?php
require_once dirname(__FILE__, 2) . '\enums\dbName.php';

interface Factory {
    public function getInstace(DBNAMES $_dbName);
}