<?php

setlocale(LC_TIME, 'fr_FR.UTF-8', 'fr_FR', 'fr');

function __($str)
{
    switch ($str)
    {
        case 'Search':
            return 'Search';
        case 'Update':
            return 'Update';
        case 'Updating database... Please wait.':
            return 'Updating database... Please wait.';
        case '<b>%d</b> results for <i>%s</i>':
            return '<b>%d</b> results <i>%s</i>';
        case 'Not Found':
            return 'Not Found';
        case 'Article not found.':
            return 'Article not found.';
        case 'Older':
            return 'Older';
        case 'Newer':
            return 'Newer';
        case 'RSS Feed':
            return 'Flux RSS';
        case 'Update complete!':
            return 'Update complete!';
        case 'Click here to reload this webpage.':
            return 'Click here to reload this webpage.';
        case 'Source:':
            return 'Source :';
        case '_date_format':
            return '%A %e %B %Y at %H:%M';
        case 'configuration':
        case 'articles':
            return $str;
    }
}

// Fancy URLs - rename apache-htaccess to .htaccess and uncomment
// define('LOCAL_URI', '');
// Mirrors Farm install - Read the documentation for detailed instructions
// define('ROOT_DIR', dirname($_SERVER['SCRIPT_FILENAME']));

?>
