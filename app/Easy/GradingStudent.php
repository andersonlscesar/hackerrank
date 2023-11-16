<?php
namespace App\Easy;

class GradingStudent
{
    /**
    * @param array $grades
    * HackerLand University has the following grading policy:

    * Every student receives a  in the inclusive range from  to .
    * Any  less than  is a failing grade.
    * Sam is a professor at the university and likes to round each student's  according to these rules:
    * If the difference between the  and the next multiple of  is less than , round  up to the next multiple of .
    * If the value of  is less than , no rounding occurs as the result will still be a failing grade.
     */

    public static function gradingStudent( array $grades )
    {
        $maxValue = 0;
        $nextFiveMultipleNumber = [];
        $roundedGrades = [];
        $notRoundedGrades = [];
        $diff = [];

        foreach ( $grades as $grade ) {            

            if ( $grade >= 38 ) {

                if ( $grade >= $maxValue ) $maxValue = $grade;       

                for ( $i = 0; $i < $maxValue; $i++ ) {
                    
                    if ( $i * 5 > $grade ) {
                        $nextFiveMultipleNumber[] = $i * 5 ;
                        break;                        
                    }
                }
                
            }
            
        }
        print_r( $nextFiveMultipleNumber );

        // if ( !empty( $nextFiveMultipleNumber ) ) {
    
        //     for ( $i = 0; $i < count( $nextFiveMultipleNumber ); $i++ ) {
        //         $diff[] = $nextFiveMultipleNumber[$i] - $grades[$i];

        //         if ( $diff[$i] < 3 ) {
        //             $roundedGrades[] = $nextFiveMultipleNumber[$i];
        //         } else {
        //             $roundedGrades[] = $grades[$i];
        //         }
        //     }
        // }


        // print_r( $roundedGrades );    
    }
}

GradingStudent::gradingStudent([73, 67, 38, 33]); 