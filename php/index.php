<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

include_once('data.php');

$oResponse = (object)[
    "draw" => $draw,
    "recordsTotal" => 1,
    "recordsFiltered" => 1,
    "data" => $aData
];

echo json_encode($oResponse);
