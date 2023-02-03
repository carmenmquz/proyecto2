<?php

function searchByField($fieldsArray, $modelClass){
    $busquedaFiltroQ = request()->input('filter');
    $query = $modelClass::query();
    if($busquedaFiltroQ && array_key_exists('q', $busquedaFiltroQ)) {
        foreach ($fieldsArray as $fieldName) {
            $query = $query
                ->orWhere($fieldName, 'like', '%' .$busquedaFiltroQ['q'] . '%');
        }
    }
    return $query;
}
