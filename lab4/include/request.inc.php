<?php
    function getParam($name, $defaultValue='')
    {
        return isset($_GET[$name])?$_GET[$name]:$defaultValue;
    }
