<?php
    // -- Exo 1
    /**
     * @param $class
     * @return bool
     */
    function checkClass($class) {
        switch ($class) {
            case is_a($class, 'Foo'):
                return true;
                break;
            case is_a($class, 'User'):
                return true;
                break;
            case is_a($class, 'Country'):
                return true;
                break;
            default:
                return false;
        }
    }

    // -- Exo 2
    /**
     * @param $word
     * @return bool
     */
    function checkAnagramme($word) {
        $word1 = strtolower($word);// on met en minuscule 
        $word2 = "ravie";
        if(count_chars($word1,1) == count_chars($word2,1)) //si ya occurence on retourne true
        {
            return true;
        }else{
            return false;
        }

    }

    // -- Exo 4
    /**
     * @param $word
     * @return bool
     */
    function checkPalindrome($word) {
        $word1 = strtolower($word);
        $inverse = strrev($word1); //inverse le mot
        if($word1 == $inverse){//si egal on retourne true
            return true;
        }else{
            return false;
        }
        
    }

    // -- Exo 5
    /**
     * @param $word
     * @return string
     */
    function checkBlackBox($word) {

    }