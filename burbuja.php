<?php
 
    function burbuja($A,$n)
    {
        for($i=1;$i<$n;$i++)
        {
                for($j=0;$j<$n-$i;$j++)
                {
                        if($A[$j]>$A[$j+1])
                        {$k=$A[$j+1]; $A[$j+1]=$A[$j]; $A[$j]=$k;}
                }
        }
 
      return $A;
    }
 
    function main()
    {
 
        $VectorA=array(20,19,18,17,16,15,14,13,12,11,10,9,8,76,5,4,3,2,1);
 
        $VectorB=burbuja($VectorA,sizeof($VectorA));
 
        for($i=0;$i<sizeof($VectorB);$i++)
            echo $VectorB[$i]."\n";
 
    }
 
    main();
?>
