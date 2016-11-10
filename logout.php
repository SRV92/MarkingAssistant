<?php
    require_once 'resources/config.php';

    if ($user->is_loggedin()) {
        $user->logout();
        $user->redirect('login');
        echo "successfully logged out";
    }
    else {
        echo "error with logout";
    }

?>
