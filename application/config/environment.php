<?php
if(! defined('ENVIRONMENT') )
{
    $domain = strtolower($_SERVER['HTTP_HOST']);
    
    switch($domain) {
        case ‘www.crossfitdeviate.com’ :
            define(‘ENVIRONMENT’, ‘production’);
            break;
            
        case ‘memebooper.byethost7.com/’ :
            //our staging server
            define(‘ENVIRONMENT’, ‘development’);
            break;
            
        default :
            define(‘ENVIRONMENT’, ‘local’);
            break;
    }
}