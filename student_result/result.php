<?php
    $sub[5]=0;
    $total=0;
    $grade;

    for($i=0; $i<5; $i++){
        $a=readline('Enter the marks of subject '.($i+1).': ');
        if($a<0 || $a>100){
            echo "Marks must be between 0 and 100 \n";
            $i--;
        }
        else
            {
                $sub[$i]=$a;
                $total=$total+$a;
                if($a<33){
                    $grade='F';
                }
            }
    }

    
    $arg=$total/5;

    echo "Tatal Marks: ".$total."\n";

    echo "Average Marks: ".$arg."\n";

   if (isset($grade)){
    echo "You Failed \n";
   }
   else{
    switch ($arg){
        case $arg>=80 && $arg<=100:
            echo "Grade: A+ \n";
            break;
        case $arg>=70 && $arg<80:
            echo "Grade: A \n";
            break;
        case $arg>=60 && $arg<70:
            echo "Grade: A- \n"; 
            break;
        case $arg>=50 && $arg<60:
            echo "Grade: B \n";
            break;
        case $arg>=40 && $arg<50:
            echo "Grade: C \n"; 
            break;
        case $arg>=33 && $arg<40:
            echo "Grade: D \n";
            break;
        default:
            echo "Grade: F \n";
            break;
    }
   }
    