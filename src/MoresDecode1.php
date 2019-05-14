<?php

namespace Petunia\Kyu;

class MoresDecode1
{
    function decode_morse(string $code)
    {
        $finalString = '';
        // first we split the words
        $splitWords = explode( '   ' , $code );
        for ( $i = 0; $i <= count( $splitWords ) - 1  ; $i++ ) {
            $finalString = $this->buildWord( explode( ' ' , $splitWords[ $i ] ) , $finalString );
            $finalString .= $i != count( $splitWords ) - 1  ? ' ' : '';
        }
        return trim($finalString);
    }

    /**
     * @param array $explodeChars
     * @param string $finalString
     * @return string
     */
    protected function buildWord(array $explodeChars , string $finalString): string
    {

        foreach ( $explodeChars as $char ) {
            if(strpos($char ,'···' ) !== false ){
                return 'SOS';
            }
            $itemKey = array_search( $char , $this->moresMap() );
            $finalString .= $itemKey;
        }
        return $finalString;
    }


    private function moresMap()
    {
        return [
            'SOS' => '··· −−− ···',
            "!" => "---." , "\"" => ".-..-." , "$" => "...-..-" , "'" => ".----." ,
            "(" => "-.--." , ")" => "-.--.-" , "+" => ".-.-." , "," => "--..--" ,
            "-" => "-....-" , "." => ".-.-.-" , "/" => "-..-." , "0" => "-----" ,
            "1" => ".----" , "2" => "..---" , "3" => "...--" , "4" => "....-" , "5" => "....." ,
            "6" => "-...." , "7" => "--..." , "8" => "---.." , "9" => "----." , ":" => "---..." ,
            ";" => "-.-.-." , "=" => "-...-" , "?" => "..--.." , "@" => ".--.-." , "A" => ".-" ,
            "B" => "-..." , "C" => "-.-." , "D" => "-.." , "E" => "." , "F" => "..-." ,
            "G" => "--." , "H" => "...." , "I" => ".." , "J" => ".---" , "K" => "-.-" ,
            "L" => ".-.." , "M" => "--" , "N" => "-." , "O" => "---" , "P" => ".--." ,
            "Q" => "--.-" , "R" => ".-." , "S" => "..." , "T" => "-" , "U" => "..-" ,
            "V" => "...-" , "W" => ".--" , "X" => "-..-" , "Y" => "-.--" , "Z" => "--.." ,
            "[" => "-.--." , "]" => "-.--.-" , "_" => "..--.-" ,
        ];
    }

}