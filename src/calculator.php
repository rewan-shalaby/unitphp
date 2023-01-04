<?php
class calculator {
//     public function Add($a,$b){
//             return $a+$b;
//     }
//     public function Sub($a,$b){
//         return $a-$b;
// }
        public function Factorial($n){
                if($n>=0 && is_int($n) ){
                $fact=1;
                for($x=$n;$x>=2;$x--){
                $fact=$fact*$x;
                }
                return $fact;
        }else{
                return null;
        }
}
        // public function Factorial($n){
        //         if(n>=0)
        //         if($n<=2){
        //                 return 1;  
        //         }elseif($n>2){
        //                 $fact=$n*Factorial($n-1);
        //         return $fact;
        //         }
        // }
}
?>
