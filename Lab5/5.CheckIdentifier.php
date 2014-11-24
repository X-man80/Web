<?php
    if(isset($_GET['identifier']))
    {
        $identifier = trim($_GET['identifier']);
    }
    else
    {
        die("There is not identifier!");
    }
    if(empty($identifier))
    {
        die("Identifier is empty!");
    }
    if(!ctype_alpha($identifier[0]))
    {
        die("First letter must be A-Z or a-z");
    }
    for($i = 1; $i < strlen ($identifier); $i++)
    {
        if(!ctype_alnum($identifier[$i]))
        {
            die("Only letters and numbers can be at identifier");
        }
    }
    echo("Alls fine");
