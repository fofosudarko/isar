<?php
// function to concatenate ModelName and ModelCategory --> this function may seem redundant

function concatModelName($brandName, $modelName, $modelCategory) {
    /*
        Input parameters:
        String $brandName,
        String $modelName,
        String $modelCategory,
        
        Output parameters:
        String $model --> Do not have to create any new function 
    */
    
    switch ($brandName) {
        case "Nokia":
            if (preg_match ("/^([CcEeNnXx])$/", $modelName) || preg_match ("/^[iI]/", $modelCategory)) {
                $model = $modelName.$modelCategory;
            } else {
                $model = $modelName."&nbsp;".$modelCategory;
            }   
            return $model;
            break;
        case "Samsung":
            if (preg_match ("/([jJ][eE][tT])/", $modelName) || preg_match ("/^[bBtT]/", $modelCategory)) {
                $model = $modelName."&nbsp;".$modelCategory;
            } else {
                $model = $modelName.$modelCategory;
            }
            return $model;
            break;
        case "Sony Ericsson":
            if (preg_match ("/^([cCfFGgKkMmPpRrSsJjTtVvWwZz])$/", $modelName)) {
                $model = $modelName.$modelCategory;
            } else {
                $model = $modelName."&nbsp;".$modelCategory;
            }
            return $model;
            break;
        case "LG":
            if (preg_match ("/^([bBcCfFgGkKlLMmPpSsTtUu])$/", $modelName)) {
                $model = $modelName.$modelCategory;
            } else {
                $model = $modelName."&nbsp;".$modelCategory;
            }
            return $model;
            break;
        case "HTC":
            if (preg_match ("/(^[pP]$)|(^[sS]$)/", $modelName)) {
                $model = $modelName.$modelCategory;
            } else {
                $model = $modelName."&nbsp;".$modelCategory;
            }
            return $model;
            break;
        case "Motorola":
            if (preg_match ("/^([aAcCeEmVvWw])$/", $modelName) || preg_match ("/^(MP)$/", $modelName)) {
                $model = $modelName.$modelCategory;
            } else {
                $model = $modelName."&nbsp;".$modelCategory;
            }
            return $model;
            break;            
        default:
            $model = $modelName."&nbsp;".$modelCategory;
            return $model;                
    }
}
?>
