<?php
    if (isset($_SERVER['QUERY_STRING']))
    {
        echo "Query string = '{$_SERVER['QUERY_STRING']}'";
    }