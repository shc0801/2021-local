<?php

namespace Controller;

use App\DB;

class ApiController {
    function nihApi() {
        extract($_GET);

        $start = ($pageNo - 1) * $numOfRows;

        if(isset($_GET["bcodeName"]))
            $nihs = DB::fetchAll("SELECT * FROM nihs WHERE bcodeName LIKE '%$bcodeName%' LIMIT $start, $numOfRows");
        else 
            $nihs = DB::fetchAll("SELECT * FROM nihs LIMIT $start, $numOfRows");

        foreach($nihs as $nih) {
            $path = IMAGE."/$nih->image";
            if(is_file($path)) {
                $data = file_get_contents("$path");
                $nih->image = "data:image/png;base64," . base64_encode($data);
            } else {
                $nih->image ="no image";
            }
        }
        
        $json = [
            "numOfRows" => $numOfRows,
            "pageNo" => $pageNo,
            "totalCount" => count($nihs),
            "items" => $nihs
        ];

        json_response($json);
    }
    
    function showApi() {
        extract($_GET);
        
        if(!isset($_GET["searchType"]) || !isset($_GET["year"])) go("/showApi", "필수값이 모두 입력되지 않았습니다.");
        if($searchType == "M" && !isset($_GET["month"])) go("/showApi", "필수값이 모두 입력되지 않았습니다.");
        
        if($searchType == "M") {
            $shows = DB::fetchAll("SELECT * FROM shows WHERE year = ? AND month = ?", [$year, $month]);
        } else if($searchType == "Y" && !isset($month)) {
            $shows = DB::fetchAll("SELECT * FROM shows WHERE year = ?", [$year]);
        } else if($searchType == "Y") {
            $shows = DB::fetchAll("SELECT * FROM shows WHERE year = ? AND month = ?", [$year, $month]);
        }
        
        if(isset($_GET["month"])) {
            $json = [
                "showType" => $searchType,
                "year" => $year,
                "month" => $month,
                "totalCount" => count($shows),
                "items" => $shows
            ];
        } else {
            $json = [
                "showType" => $searchType,
                "year" => $year,
                "totalCount" => count($shows),
                "items" => $shows
            ];
        }

        json_response($json);
    }   
}