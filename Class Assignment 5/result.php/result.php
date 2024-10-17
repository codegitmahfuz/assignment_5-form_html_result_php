<?php

$marks = 75 ; // Exam Marks 

switch(true){
    case($marks >=80 && $marks<=100):
        echo " A+ ";
        break;
    case($marks >=70 && $marks<=79):
        echo " A ";
        break;
    case($marks >=60 && $marks<=69):
        echo " A- ";
        break;
    case($marks >=50 && $marks<=59):
        echo " B ";
        break;
    case($marks >=40 && $marks<=49):
        echo " C ";
        break;
    case($marks >=33 && $marks<=40):
        echo " D ";
        break;
     
    default:
        echo "You are Fail In the Exam";
        break;


}