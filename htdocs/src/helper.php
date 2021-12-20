<?php

function go($url, $msg) {
    echo "<script>";
    echo "alert('$msg');";
    echo "location.href='$url';";
    echo "</script>";
    exit;
}

function back($msg) {
    echo "<script>";
    echo "alert('$msg');";
    echo "history.back();";
    echo "</script>";
    exit;
}

function view($name, $data = []) {
    require VIEW."/header.php";
    require VIEW."/$name.php";
    require VIEW."/footer.php";
    exit;
}

function txtname($filename) {
    return strtolower(substr($filename, strrpos($filename, ".")));
}

function json_response($data) {
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
} 

function pagenation($data) {
    extract($_GET);

    $all = count($data);

    $tab = isset($_GET["tab"]) ? $_GET["tab"] : "";
    $type = isset($_GET["type"]) ? $_GET["type"] : "normal";

    define("LIST_LENGTH", $type == "normal" ? 8 : 10);
    define("BLOCK_LENGTH", 10);
    define("SPACING", 9);

    $page = isset($_GET["page"]) && is_numeric($_GET["page"]) && $_GET["page"] >= 1 ? $_GET["page"] : 1;

    $totalPage = ceil(count($data) / LIST_LENGTH);
    $startPage = ceil($page / BLOCK_LENGTH) * BLOCK_LENGTH - SPACING;
    $endPage = $startPage + SPACING > $totalPage ? $totalPage : $startPage + SPACING;

    $prev = true;
    $next = true;

    if($startPage == 1) $prev = false;
    if($endPage == $totalPage) $next = false;

    $data = array_slice($data, ($page - 1) * LIST_LENGTH, LIST_LENGTH);

    return (array)compact("startPage", "endPage", "totalPage", "page", "prev", "next", "tab", "type", "data", "all");
}