<?php
function reverseNumber($num) {
$reversed = (int)strrev((string)$num);
return $reversed;
}
echo reverseNumber(22446688);
?>