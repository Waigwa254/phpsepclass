<?php
$marks=50;
//if statement

if ($marks==50){
    echo "it is true";
    echo "<br>";

}
//if ...else
if ($marks>=50){
    echo "you have passed";
}else{
    echo "you have failed";
}
echo "<br>";
//if...elseif...else
if ($marks>=0 && $marks<=39){
    echo "you have failed";
}elseif ($marks>40 and $marks<=59){
    echo "you have passed";
}else{
    echo " wrong input";
}
echo "<br>";

$age="30";
//if..elseif..else
if ($age>=0 && $age<=29){
    echo "not licenced to drive";

}elseif ($age>=30 and $age<=39){
    echo " licenced to drive";

}else{
    echo "too old to drive";
}
echo "<br>";

//switch

switch ($age){
    case ($age>=0 && $age<=29):
        echo "not licenced to fly";
        break;
    case ($age>=30 and $age<=39):
        echo "licenced to fly";
        break;
    case ($age>=40):
        echo "too old to fly";
        break;
    default:
        echo "enter age";
}









