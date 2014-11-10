<?php
    require_once("include/request.inc.php");
    require_once("include/sin.inc2.php");
    include("template/head.html");
    $minute=getParam("minute", 6);
    $degree=getParam("degree", 10);
    printSinTable($minute, $degree);
    include("template/foot.html");
?>