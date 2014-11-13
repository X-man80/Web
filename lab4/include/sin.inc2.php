<?php
    function printSinTable($minute, $degree)
    {
        $table="<table>";
        $table=$table.getSinTableHead($minute, $degree);
        $table=$table.getSinTableBody($minute, $degree);
        $table=$table."</table>";
        echo $table;                       	
    }

    function getSinTableHead($minute, $degree)
    {
        $html="<tr>";
        $html.="<th>Degree\\Minute</th>";
        for($min=0; $min<=60; $min+=$minute)
        {
            $html.="<th class=\"deg_min\">{$min}</th>";
        }
        $html.="</tr>";
        return $html;
    }

    function getSinTableBody($minute, $degree)
    {
        $n = '1';
		$html='';
        for($deg=0; $deg<=360; $deg+=$degree)
        {
            if ($n == '1')
			{
			    $background = 'odds';
				$n = 0;
			}
			else
			{
			    $background = 'evens';
				$n = 1;			    
			}
		    $html.='<tr>';
            $html.="<td class=\"{$background}\">{$deg}</td>";
            for($min=0; $min<=60; $min+=$minute)
            {
                $sin=number_format(calcSin($deg, $min), 3);
                $html.="<td class=\"{$background}\">{$sin}</td>";
            }
            $html.='</tr>';
        }
        return $html;       
    }

    function calcSin($deg, $min)
    {
        $sin=sin(($deg+$min)*M_PI/180);
        return $sin;    
    }
