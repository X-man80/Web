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
            $html.="<th>{$min}</th>";
        }
        $html.="</tr>";
        return $html;
    }

    function getSinTableBody($minute, $degree)
    {
        $html='';
        for($deg=0; $deg<=360; $deg+=$degree)
        {
            $html.='<tr>';
            $html.="<td>{$deg}</td>";
            for($min=0; $min<=60; $min+=$minute)
            {
                $sin=number_format(calcSin($deg, $min), 3);
                $html.="<td>{$sin}</td>";
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
?>