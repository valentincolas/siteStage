<?php
require_once 'ControllerSubstrat.php';
if (isset($_GET["table"]) && isset($_GET["action"])){
    $table = $_GET["table"];
    $action = $_GET["action"];
    $table::$action(); 
} else {
    ControllerSubstrat::readAll();
}



