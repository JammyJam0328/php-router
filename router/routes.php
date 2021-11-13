<?php
    require_once "./configs/router.php";
  

    // Define your routes here
    route('/', function () {
        return view('home');
    });

   


    $action = $_SERVER['REQUEST_URI'];
    dispatch($action);