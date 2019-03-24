<?php

require 'session.php';
require 'translate.php';
require 'env.php';


function getLanguage(){
    return $_SESSION['language'];
}