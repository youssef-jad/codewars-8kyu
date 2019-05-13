<?php
namespace Petunia\Kyu;

class ExesAndOhs
{

    function XO($s) {
        $handle = str_split($s  , 1);
        $x_stack = [];
        $o_stack = [];

        for ($i = 0 ; $i <  count($handle) ; $i++ )
        {
            if(strtolower($handle[$i]) == 'x')
            {
                array_push( $x_stack , $handle[$i] );
            }

            if(strtolower($handle[$i]) == 'o')
            {
                array_push( $o_stack , $handle[$i] );
            }
        }

        if(count($x_stack) === count($o_stack) )
        {
            return true ;
        }
        return false ;

    }

}