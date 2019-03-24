<?php


function __($phrase){
    if(getLanguage() != 'pt-BR'){
       $en = (array) json_decode(file_get_contents('languages/' . getLanguage() . '.json'));
       return $en[$phrase] ?? $phrase;
    }
    return $phrase;
}

function setLanguage($lang){
    $_SESSION['language'] = $lang;
}