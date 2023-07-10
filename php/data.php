<?php

$draw = !empty($_GET["draw"]) ? (int)$_GET["draw"] : null;
$start = !empty($_GET["start"]) ? (int)$_GET["start"] : 0;
$length = !empty($_GET["length"]) ? (int)$_GET["length"] : 0;
$search = !empty($_GET["search"]) ? (object)$_GET["search"] : (object)[];
$order = !empty($_GET["order"][0]) ? (object)$_GET["order"][0] : (object)[];

$searchValue = !empty($search->value) ? $search->value : '';
$orderColumn = !empty($order->column) ? $order->column : 0;
$orderDir = !empty($order->dir) ? strtoupper($order->dir) : 'ASC';

$aData = [];

$aData[] = [1, "John Doe",
    "johndoe@example.com", "New York",
    "ABC Company", "12345678"
];