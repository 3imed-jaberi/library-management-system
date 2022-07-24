<?php

require_once "config/port.php";
require_once "database-connector.php";
require_once "model-manager.php";


$dbConnector = new DataBaseConnector(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$modelManager = new ModelManager($dbConnector);
