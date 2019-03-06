<?php
 function camelCaseToUnderscore($str) {
    $characters = str_split($str); //store all characters in an array
    $characters[0] = strtolower($characters[0]); //covert the first character to a lowercase
    //exam all characters in the array. If a character is uppercase, replace it with a lowercase and prefix it with an underscore.
    foreach ($characters as &$character) {
        if (ord($character) >= ord('A') && ord($character) <= ord('Z'))
            $character = '_' . strtolower($character);
    }
    
    return implode('', $characters); //convert the array into a string and return the string
}
 function __autoload($class) {
    require_once camelCaseToUnderscore($class) . '.class.php';
}

?>



