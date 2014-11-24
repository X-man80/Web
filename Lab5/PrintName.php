<?php
    if (isset($_GET['name']))
    {
        echo "Hello, Dear {$_GET['name']}!";
    }