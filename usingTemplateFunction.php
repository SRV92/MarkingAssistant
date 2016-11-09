<?php

    ini_set('display_errors', 'On');

    //echo realpath((dirname(__FILE__) . "/resources/library/templateFunctions.php"));

    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));

    require_once LIBRARY_PATH.'/templateFunctions.php';

    // /*
    //     Now you can handle all your php logic outside of the template
    //     file which makes for very clean code!
    // */

    $setInContentDotPhp = 'Hey! I was set in the content.php file.';

    // Must pass in variables (as an array) to use in template
    $variables = array(
        'setInContentDotPhp' => $setInContentDotPhp,
    );

    // Use content.php to render everything inside the div content
    renderLayoutWithContentFile('content.php', $variables);

?>
