<?php
function Palindrome($n){ 
    $temp = $n; 
    $new = 0; 
    while (floor($temp)) { 
        $d = $temp % 10; 
        $new = $new * 10 + $d; 
        $temp = $temp/10; 
    } 
    if ($new == $n){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 
$n1 = 12221;
if (Palindrome($n1)){ 
    echo " this is Palindrome"; 
}
else { 
echo "this is not a Palindrome Number"; 
}
 
?>
