<?php

function searchDataTableData($aData, $draw, $start, $length, $search, $order, $columns){
    // Search
    $searchValue = !empty($search['value']) ? $search['value'] : '';
    $filteredData = [];
    foreach ($aData as $row) {
        $assign = false;

        $index = 0;
        foreach($row as $col){
            if($columns[$index]['searchable'] === "true"){
                if(stripos($col, $searchValue) !== false){
                    $assign = true;
                }
            }
            
            $index++;
        }

        if ($assign) {
            $filteredData[] = $row;
        }
    }
    
    // Order
    $orderColumn = array_column($filteredData, (int)$order['column']);
    $orderDir = $order['dir'] === 'desc' ? SORT_DESC : SORT_ASC;
    array_multisort($orderColumn, $orderDir, $filteredData);
    $pagedData = array_slice($filteredData, (int)$start, (int)$length);
    
    // Result
    $result = [
        'draw' => $draw,
        'recordsTotal' => count($aData),
        'recordsFiltered' => count($filteredData),
        'data' => $pagedData
    ];
    
    return $result;
}