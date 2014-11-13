<?php
    require_once("include/request.inc.php");
    require_once("include/sin.inc2.php");
    include("template/head3.html");
    $minDefValue=6;
    $degDefValue=10;
    $minute=getParam("minute", 6);
    if ($minute<=0 || $minute>=60)
    {
        $minute=$minDefValue;
    } 
    $degree=getParam("degree", 10);
    if ($degree<=0 || $degree>=360)
    {
        $degree=$degDefValue;
    }
    printSinTable($minute, $degree);
    include("template/foot.html");
