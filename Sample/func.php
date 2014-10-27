<?php
    function printInfo($info)
    {
        $data = "<label>Name: </label>" .
                "<strong>" . $info["name"] . "</strong>" . 
                "<br>" .
                "<label>Age: <label>" .
                "<span>" . $info["age"] . "</span>"; 
        echo $data;
    }