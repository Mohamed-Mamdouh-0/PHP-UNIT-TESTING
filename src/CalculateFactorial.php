<?php

class CalculateFactorial{
    public function factorial($num){
        $factorial = 1;  
        if($num>=0 && is_int($num)){
            for ($i= 1; $i<=$num; $i++){  
                $factorial = $factorial * $i;}  
               }else{
                 $factorial=null;
               }    
          return $factorial;
           }
}
?>