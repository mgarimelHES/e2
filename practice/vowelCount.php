<?php
#
function vowel_Count($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
print_r(vowel_Count('sampleInput'));
$example = (5 > 10) ? 9 : 10;
var_dump($example);
?>