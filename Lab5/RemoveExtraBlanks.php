<?php
    if (isset($_GET['text']))
    {
        $text = trim($_GET['text']);
		for ($i=1; $i < strlen($text); $i++)
        {
            if (!(($text[$i-1] == ' ') && ($text[$i] == ' ')))
			{
     			echo "{$text[$i]}";
            }
        }
    }