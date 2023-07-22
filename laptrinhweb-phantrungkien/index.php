<?php
    session_start();
    require 'mvc/bridge.php';
    require_once "mvc/core/paging.php";
    $basepath='product/home/';
    $totalRecords=29;
    $offset=0;
    $paging= new Paging($basepath, $totalRecords, LIMIT, $offset);
    $paging->createLinks();
?>