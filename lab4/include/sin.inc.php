<?php
    function printSinTable()
    {
        $table="<table>";
        $table=$table.getSinTableHead();
        $table=$table.getSinTableBody();
        $table=$table."</table>";
        echo $table; 
    }

    function getSinTableHead()
    {
        $html="<tr>";
        $html.="<th>Degree\\Minute</th>";
        for($minute=0; $minute<=60; $minute+=6)
        {
            $html.="<th>{$minute}</th>";
        }
        $html.="</tr>";
        return $html;
    }

    function getSinTableBody()
    {
        $html='';
        for($degree=0; $degree<=360; $degree+=10)
        {
            $html.='<tr>';
            $html.="<td>{$degree}</td>";
            for($minute=0; $minute<=60; $minute+=6)
            {
                $sin=calcSin($degree, $minute);
                $html.="<td>{$sin}</td>";
            }
            $html.='</tr>';
        }
        return $html;       
    }

    function calcSin($degree, $minute)
    {
        $sin=sin(($degree+$minute)*M_PI/180);
        return $sin;    
    }