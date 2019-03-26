<?php


class RandomStringGenerator

{


    public static function generateRandomCharacter( $NumericStringLength, $AlphaStringLength, $AlphaStringPos )

    {

        if ($AlphaStringPos=="R")

        {

            $digits = self::generateNumericString( $NumericStringLength );

            $letters = strtoupper(self::generateAlphaString( $AlphaStringLength ));

            $results = $digits.$letters;

        }else if ($AlphaStringPos=="L")

        {

            $digits = self::generateNumericString( $NumericStringLength );

            $letters = strtoupper(self::generateAlphaString( $AlphaStringLength ));

            $results = $letters.$digits;

        }


        return $results;

    }

    public static function refactorRandomCharacter( $data, $AlphaStringLength, $AlphaStringPos )

    {

        if ($AlphaStringPos=="R")

        {


        }else if ($AlphaStringPos=="L")

        {

        }

        return $refactored;

    }

    public static function generateNumericString( $length )

    {

        $number_string = "0123456789";

        return self::getRandomNumberString( $number_string, $length );

    }

    protected static function getRandomNumberString( $number_string, $length )

    {
        $return_number_string = ""; // the empty string

        for ($x = 0; $x < $length; $x++)

            $return_number_string .= self::getRandomNumber( $number_string );

        return $return_number_string;

    }

    protected static function getRandomNumber( $number_string )

    {

        $number_array = str_split( $number_string );

        $length = strlen( $number_string );

        $position = mt_rand( 0, $length - 1 );

        return $number_array[$position];

    }

    public static function generateAlphaString( $length )

    {

        $letter_string	= "abcdefghijklmnopqrstuvwxyz";

        return self::getRandomLetterString( $letter_string, $length );

    }

    protected static function getRandomLetterString( $letter_string, $length )

    {

        $return_string = ""; // the empty string

        for ($x = 0; $x < $length; $x++)

            $return_string .= self::getRandomLetter( $letter_string );

        return $return_string;

    }

    protected static function getRandomLetter( $letter_string )
    
    {
        
        $letter_array = str_split( $letter_string );
        
        $length = strlen( $letter_string );
        
        $position = mt_rand(0, $length - 1);
        
        return $letter_array[$position];
        
    }
    
}
