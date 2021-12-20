<?php

use App\Router;

Router::get("/", "ViewController@indexPage");
Router::get("/init", "ActionController@init");

Router::get("/nihs", "ViewController@nihPage");
Router::get("/nihcImage", "ViewController@nihcImage");
Router::get("/register/nih", "ViewController@registerNihPage");
Router::post("/register/nih", "ActionController@registerNih");
Router::get("/update/nih", "ViewController@updateNihPage");
Router::post("/update/nih", "ActionController@updateNih");
Router::get("/delete/nih", "ActionController@deleteNih");

Router::get("/month", "ViewController@monthPage");
Router::get("/year", "ViewController@yearPage");
Router::get("/register/show", "ViewController@registerShowPage");
Router::post("/register/show", "ActionController@registerShow");
Router::get("/update/show", "ViewController@updateShowPage");
Router::post("/update/show", "ActionController@updateShow");
Router::get("/delete/show", "ActionController@deleteShow");

Router::get("/nihApi", "ViewController@nihApiPage");
Router::get("/showApi", "ViewController@showApiPage");

Router::get("/openAPI/nihList.php", "ApiController@nihApi");
Router::get("/openAPI/showList.php", "ApiController@showApi");

Router::start();