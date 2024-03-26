<?php

// Incluir filtros a la url para filtrar los datos mostrados

namespace App\Filters;
use Illuminate\Http\Request;

class ApiFilter{
    protected $safeParams = []; // Parametros para filtrar los modelos
    protected $columnMap = []; // Mapear columnas a como queremos q se filtren
    protected $operatorMap = []; // Mapeo de los operadores

    public function transform(Request $request)
    {
        $eloQuery = [];
        
        foreach($this -> safeParams as $parm => $operators){
            $query = $request ->  query($parm);
            if(!isset($query)){
                continue;
            }
            $column = $this -> columnMap[$parm] ?? $parm;
            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$column, $this -> operatorMap[$operator], $query[$operator]]; 
                }
            }
        }
        return $eloQuery;
    }
}