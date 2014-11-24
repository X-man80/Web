<?php
    function calcPasswordStrenght($password)
	{
	    passwordType($password);
        $strenght = 0;
//		$strenght += calcStrenghtForLength($password);
		$strenght += 4 * calcPasswordLenght($password);
//		echo $strenght."(4*n)\n";
		$strenght += calcPassDigit($password) * 4;
//		echo $strenght."(n*4)\n";
		if (calcPassUpperChars($password)<>0)
		{
		    $strenght += ((calcPasswordLenght($password) - calcPassUpperChars($password)) * 2);
//		    echo $strenght."((len-n)*2~".calcPassUpperChars($password).")\n";
		}
		if(calcPassLowerChars($password)<>0)
		{
		    $strenght += ((calcPasswordLenght($password) - calcPassLowerChars($password)) * 2);
//		    echo $strenght."((len-n)*2)\n";
		}
		if(calcPassDigit($password) == 0)
		{
		    $strenght -= calcPassChars($password);
//		    echo $strenght."(only chars)\n";
		}
		if(calcPassChars($password) == 0)
		{
		    $strenght -= calcPassDigit($password);
//		    echo $strenght."(only digits)\n";
		}
		$strenght -= doubleChars($password);
		return $strenght;
	}
	
	function calcStrenghtForLength($password)
	{
	    $strenght = 0;
	    $passLenght = calcPasswordLenght($password);
	    return $strenght;
	}
	
	function passwordType($password)
	{
        if(!ctype_alnum($password))
		{
		    die("Only letters A-Z, a-z and numbers can be at password");
		}
	}

	function calcPasswordLenght($password)
	{
        $lenght=strlen($password);
		return $lenght;
	}
	
	function calcPassDigit($password)
	{
	    $digit = 0;
		for($i=0;$i<calcPasswordLenght($password);$i++)
		{
		    if(!ctype_alpha($password[$i]))
			{
			    $digit++;
			}
		}
		return $digit;
	}
	
	function calcPassChars($password)
	{
	    $chars = 0;
		for($i=0;$i<calcPasswordLenght($password);$i++)
		{
		    if(ctype_alpha($password[$i]))
			{
			    $chars++;
			}
		}
		return $chars;
	}

	function calcPassUpperChars($password)
	{
	    $upperChars = 0;
		for($i=0;$i<calcPasswordLenght($password);$i++)
		{
		    if(ctype_upper($password[$i]))
			{
			    $upperChars++;
			}
		}
		return $upperChars;
	}

	function calcPassLowerChars($password)
	{
	    $lowerChars = 0;
		for($i=0;$i<calcPasswordLenght($password);$i++)
		{
		    if(ctype_lower($password[$i]))
			{
			    $lowerChars++;
			}
		}
		return $lowerChars;
	}

	function doubleChars($password)
    {
    	$pass = $password;
		$sumRepeat = 0;
		for($i1=0;$i1<calcPasswordLenght($pass);$i1++)
		{
		    $repeat = 0;
    		if($pass[$i1]<>'@')
			{
			    $char = $pass[$i1];		
    		    for($i2=$i1+1;$i2<calcPasswordLenght($pass);$i2++)
			    {
			        if($char == $pass[$i2])
				    {
				        $repeat += 1;
						$pass[$i2] = '@';
				    }
			    }
				if($repeat>0)
				{
				    $sumRepeat += ($repeat + 1);
				}
			}
		}
		return $sumRepeat;
	}