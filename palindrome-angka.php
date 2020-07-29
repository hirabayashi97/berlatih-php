<?php
function palindrome($str){
            $output = false;
            if(strrev($str) == $str){
              $output=true;
            }
            return $output;
            }


function palindrome_angka($num){
            if($num >= 1 && $num < 9){
              return $num + 1;
            }
            if ( palindrome($num) ){
              $num++;
            }
            while(palindrome($num)==false){
              $num++;
            }
            return $num;
            }

            echo palindrome_angka(8);// 9
            echo "<br>".palindrome_angka(10); // 11
            echo "<br>".palindrome_angka(117); // 121
            echo "<br>".palindrome_angka(175); // 181
            echo "<br>".palindrome_angka(1000); // 1001
?>