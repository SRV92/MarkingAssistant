<?php
    // load up your config file
    require_once 'resources/config.php';

    require_once TEMPLATES_PATH.'/header.php';

    if ($user->is_loggedin() != '') {
        $user->redirect('index.php');
    }

    if (isset($_POST['btn-login'])) {
        $uname = $_POST['txt_uname_email'];
        $umail = $_POST['txt_uname_email'];
        $upass = $_POST['txt_password'];

        if ($user->login($uname, $umail, $upass)) {
            $user->redirect('index.php');
        } else {
            $error = 'Wrong Details';
        }
    }
?>



<div id="content" class="base--form">
    <div class="container-fluid">
        <div class="login--title">
            <h1>
                Marking Assistant Login
            </h1>
        </div>
        <div class="box">
            <form method="post">
                <h2>Sign in</h2><hr />

                <?php
                    if (isset($error)) {
                ?>

                <div class="alert alert-danger">
                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                </div>

                <?php
                    }
                ?>

                <div class="form-group">
                    <label for="txt_uname_email">Username: </label>
                    <input type="text" class="form-control" name="txt_uname_email" placeholder="Username or Email" required />
                </div>
                <div class="form-group">
                    <label for="txt_password">Password: </label>
                    <input type="password" class="form-control" name="txt_password" placeholder="Your Password" required />
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6">
                            <button type="submit" name="btn-login" class="btn btn-sm btn-block login--btn">Login</button>
                        </div>
                        <div class="col-xs-6">
                            <a href="sign-up.php" class="btn btn-sm btn-block register--btn">Register</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    require_once TEMPLATES_PATH.'/footer.php';
?>
