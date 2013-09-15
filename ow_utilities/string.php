<?php

/**
 * EXHIBIT A. Common Public Attribution License Version 1.0
 * The contents of this file are subject to the Common Public Attribution License Version 1.0 (the “License”);
 * you may not use this file except in compliance with the License. You may obtain a copy of the License at
 * http://www.oxwall.org/license. The License is based on the Mozilla Public License Version 1.1
 * but Sections 14 and 15 have been added to cover use of software over a computer network and provide for
 * limited attribution for the Original Developer. In addition, Exhibit A has been modified to be consistent
 * with Exhibit B. Software distributed under the License is distributed on an “AS IS” basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for the specific language
 * governing rights and limitations under the License. The Original Code is Oxwall software.
 * The Initial Developer of the Original Code is Oxwall Foundation (http://www.oxwall.org/foundation).
 * All portions of the code written by Oxwall Foundation are Copyright (c) 2011. All Rights Reserved.

 * EXHIBIT B. Attribution Information
 * Attribution Copyright Notice: Copyright 2011 Oxwall Foundation. All rights reserved.
 * Attribution Phrase (not exceeding 10 words): Powered by Oxwall community software
 * Attribution URL: http://www.oxwall.org/
 * Graphic Image as provided in the Covered Code.
 * Display of Attribution Information is required in Larger Works which are defined in the CPAL as a work
 * which combines Covered Code or portions thereof with code not governed by the terms of the CPAL.
 */

/**
 * @author Sardar Madumarov <madumarov@gmail.com>
 * @package ow_utilities
 * @since 1.0
 */
class UTIL_String
{
    private static $caps = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

    /**
     * Replaces upper case chars in string with delimeter + lowercase chars 
     *
     * @param string $string
     * @param string $divider
     * @return string
     */
    public static function capsToDelimiter( $string, $delimiter = '_' )
    {
        static $delimiters = array();

        if ( !isset($delimiters[$delimiter]) )
        {
            $delimiters[$delimiter]['search'] = array();
            $delimiters[$delimiter]['replace'] = array();

            foreach ( self::$caps as $value )
            {
                $delimiters[$delimiter]['search'][] = $value;
                $delimiters[$delimiter]['replace'][] = $delimiter . mb_strtolower($value);
            }
        }

        return str_replace($delimiters[$delimiter]['search'], $delimiters[$delimiter]['replace'], $string);
    }

    /**
     * Replaces lowercase case chars + delimiter in string uppercase chars
     *
     * @param unknown_type $string
     * @param unknown_type $delimiter
     * @return unknown
     */
    public static function delimiterToCaps( $string, $delimiter = '_' )
    {
        $searchArray = array();
        $replaceArray = array();

        foreach ( self::$caps as $value )
        {
            $searchArray[] = $delimiter . mb_strtolower($value);
            $searchArray[] = $delimiter . $value;

            $replaceArray[] = $value;
            $replaceArray[] = $value;
        }

        return str_replace($searchArray, $replaceArray, $string);
    }

    /**
     * Enter description here...
     *
     * @param array $array
     * @param string $delimiter
     * @param string $left
     * @param string $right
     * @return string
     */
    public static function arrayToDelimitedString( array $array, $delimiter = ',', $left = '', $right = '' )
    {
        $result = '';
        foreach ( $array as $value )
        {
            $result .= ( $left . $value . $right . $delimiter);
        }
        $length = mb_strlen($result);
        if ( $length > 0 )
        {
            $result = mb_substr($result, 0, $length - 1);
        }
        return $result;
    }

    public static function removeFirstAndLastSlashes( $string )
    {
        if ( mb_substr($string, 0, 1) === '/' )
        {
            $string = mb_substr($string, 1);
        }

        if ( mb_substr($string, -1) === '/' )
        {
            $string = mb_substr($string, 0, -1);
        }
        return $string;
    }

    //TODO write description
    public static function replaceVars( $data, array $vars = null )
    {
        if ( !isset($vars) || count($vars) < 1 )
        {
            return $data;
        }

        return preg_replace('/{\$(\w+)}/ie', "isset(\$vars['\\1']) ? \$vars['\\1'] : '\\0'", $data);
    }

    public static function generatePassword( $length = 8, $strength = 3 )
    {
        list($usec, $sec) = explode(' ', microtime());
        $seed = (float) $sec + ((float) $usec * 100000);

        srand($seed);

        $vowels = 'aeuy';
        $consonants = 'bdghjmnpqrstvz';

        if ( $strength > 1 )
        {
            $vowels .= 'AEUY';
            $consonants .= 'BDGHJLMNPQRSTVWXZ';
        }

        if ( $strength > 2 )
        {
            $consonants .= '23456789';
        }

        if ( $strength > 3 )
        {
            $consonants .= '@#$%';
        }

        $password = '';
        $alt = time() % 2;

        for ( $i = 0; $i < $length; $i++ )
        {
            if ( $alt === 1 )
            {
                $password .= $consonants[(rand() % strlen($consonants))];
                $alt = 0;
            }
            else
            {
                $password .= $vowels[(rand() % strlen($vowels))];
                $alt = 1;
            }
        }

        return $password;
    }

    public static function truncate( $string, $length, $ending = null )
    {
        if ( mb_strlen($string) <= $length )
        {
            return $string;
        }

        return mb_substr($string, 0, $length) . (empty($ending) ? '' : $ending);
    }

    /**
     *  Split words that longer than $split_length in the $string by $delimiter
     *
     * @param string $string
     * @param string $delimiter
     * @param integer $split_length
     * @return string
     */
    public static function splitWord( $string, $delimiter = ' ', $split_length = 16 )
    {
        $string_array = explode(' ', $string);
        foreach ( $string_array as $id => $word )
        {
            if ( mb_strpos($word, '-') != 0 )
                continue;

            if ( mb_strlen($word) > $split_length )
            {
                $str = mb_substr($word, $split_length / 2);
                $string_array[$id] = mb_substr($word, 0, $split_length / 2) . $delimiter . $str;
            }
        }

        return implode(' ', $string_array);
    }
}