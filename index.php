<?php
    // load up your config file
    require_once 'resources/config.php';

    require_once TEMPLATES_PATH.'/header.php';

    if (!$user->is_loggedin()!="")
    {
        echo "ERROR NOT LOGGED IN";
    }
?>



<div id="content">
    <div class="container">
        test
    </div>
</div>



<?php
    require_once TEMPLATES_PATH.'/footer.php';
?>
