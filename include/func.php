<?php


function multi($num)
{

    for ($i = 1; $i <= 10; $i++) {
        $result = $num * $i;
        echo multiNumberBuilder($num) . "x" . multiNumberBuilder($i) . "=" . multiNumberBuilder($result) . "<br>";
    }
}

function multiNumberBuilder(string $multiNumberString)
{
    $result = "";
    foreach (str_split($multiNumberString) as $number){
        $result.= builder($number);
    }
    return $result;
}

function builder(int $number)
{
    $black = 'black';
    $arr = [
        1 => 'red',
        2 => 'green',
        3 => 'orange',
        4 => 'blue'
    ];
    $color = $arr[$number] ?? $black;
    return "<span style=\"color: {$color}\">{$number}</span>";
}