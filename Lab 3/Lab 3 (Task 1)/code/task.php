<?php

$regularExpression =  '/a..b/';
$exampleStr = ' abb acb acd aju avkb akdd acab';
preg_match_all($regularExpression, $exampleStr, $result);
echo var_dump($result);

$regularExpression = '/[0-9][0-9]*/';
$exampleStr = 'a1b2c3';
function makeCubeNumbers (array $numeral) : int {
    return pow((int)$numeral[0], 3);
}
echo preg_replace_callback($regularExpression, "makeCubeNumbers" , $exampleStr ), "\n";