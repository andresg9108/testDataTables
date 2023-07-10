<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

$draw = !empty($_GET["draw"]) ? (int)$_GET["draw"] : null;
$start = !empty($_GET["start"]) ? (int)$_GET["start"] : 0;
$length = !empty($_GET["length"]) ? (int)$_GET["length"] : 0;
$search = !empty($_GET["search"]) ? $_GET["search"] : [];
$order = !empty($_GET["order"][0]) ? $_GET["order"][0] : [];
$columns = !empty($_GET["columns"]) ? $_GET["columns"] : [];

include_once('data.php');
include_once('function.php');

echo json_encode((object)searchDataTableData($aData, $draw, $start, $length, $search, $order, $columns));
