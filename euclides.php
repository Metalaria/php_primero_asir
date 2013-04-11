<?php
    
    function gcd($a, $b)
    {
        $a = abs($a);
        $b = abs($b);
 
        if ($a == 0)
        {
            return $b;
        }
        elseif ($b == 0)
        {
            return $a;
        }
        elseif ($a > $b)
        {
            return gcd($b, $a % $b);
        }
        else
        {
            return gcd($a, $b % $a);
        }
    }
 
    function lcm($a, $b)
    {
        $a = abs($a);
        $b = abs($b);
 
        if ($a > $b)
        {
            return ($b / gcd($a, $b)) * $a;
        }
        else
        {
            return ($a / gcd($a, $b)) * $b;
        }
    }
?>
