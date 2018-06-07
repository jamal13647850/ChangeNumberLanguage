<?php
$English_Number="1234567890";
echo toPersian($English_Number);
echo toEnglish(toPersian($English_Number));

function toPersian($English_Number){
	$Persian_Number = str_replace(
array('0','1','2','3','4','5','6','7','8','9'),
array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'),
$English_Number
);
return $Persian_Number;
}

function toEnglish($Persian_Number){
	$English_Number = str_replace(
array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'),
array('0','1','2','3','4','5','6','7','8','9'),
$Persian_Number
);
return $English_Number;
}


?>