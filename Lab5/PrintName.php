<?php
    if (isset($_SERVER['QUERY_STRING']))
    {
        echo "Hello, Dear {$_GET['name']}!";
    }