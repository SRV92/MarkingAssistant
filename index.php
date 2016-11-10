<?php
    // load up your config file
    require_once 'resources/config.php';

    require_once TEMPLATES_PATH.'/header.php';

    if (!$user->is_loggedin())
    {
        $user->redirect('login');
    }
    else if ($user->is_loggedin()) {
        $user->redirect('home');
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
