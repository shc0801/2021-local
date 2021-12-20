<?php

namespace Controller;

use App\DB;

class ViewController {
    function indexPage() {
        view("index");
    }

    function nihPage() {
        extract($_GET);
        if(!isset($_GET["tab"]) || $_GET["tab"] == "전체 현황" || $_GET["tab"] == "") {
            $nihs = DB::fetchAll("SELECT * FROM nihs");
        } else {
            $nihs = DB::fetchAll("SELECT * FROM nihs WHERE bcodeName = ?", [$tab]);
        }
        view("nihs", pagenation($nihs));
    }

    function nihcImage() {
        extract($_GET);

        $path = IMAGE."/$filename";
        header("Content-Type: image/jpg");
        readfile($path);
    }

    function registerNihPage() {
        view("registerNih");
    }

    function updateNihPage() {
        extract($_GET);
        $nih = DB::find("nihs", $id);
        view("updateNih", compact("nih"));
    }

    function monthPage() {
        $year = isset($_GET["year"]) ? $_GET["year"] : date("Y");
        $month = isset($_GET["month"]) ? $_GET["month"] : date("m");

        $t_first = strtotime("$year-$month-1");
        $t_last = strtotime("-1 Day", strtotime("+1 Month", $t_first));

        $t_prev = strtotime("-1 Month", $t_first);
        $t_next = strtotime("+1 Month", $t_first);

        $shows = DB::fetchAll("SELECT * FROM shows WHERE showDate between ? AND ?", [date("Y-m-d", $t_first), date("Y-m-d", $t_last)]);

        view("month", compact("shows", "year", "month", "t_first", "t_last", "t_prev", "t_next"));
    }

    function yearPage() {
        $year = isset($_GET["year"]) ? $_GET["year"] : date("Y");

        $prev_year = (int)$year - 1;
        $next_year = (int)$year + 1;
        
        $shows = DB::fetchAll("SELECT * FROM shows WHERE showDate between ? AND ?", ["$year-01-01", "$year-12-31"]);

        view("year", compact("shows", "year", "prev_year", "next_year"));
    }

    function registerShowPage() {
        view("registerShow");
    }

    function updateShowPage() {
        extract($_GET);
        $show = DB::fetch("SELECT * FROM shows WHERE showUid = ?", [$id]);
        view("updateShow", compact("show"));
    }

    function nihApiPage() {
        view("nihApi");
    }

    function showApiPage() {
        view("showApi");
    }
}