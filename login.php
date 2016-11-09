<?php
    // load up your config file
    require_once 'resources/config.php';

    require_once TEMPLATES_PATH.'/header.php';
?>



<div id="content" class="login">
    <div class="container-fluid">
        <div class="login--title">
            <h1>
                Marking Assistant Login
            </h1>
        </div>
        <div class="box">
            <form>
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id="inputUsername"
                    aria-describedby="enter username to login" />
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="text" class="form-control" id="inputPassword"
                    aria-describedby="enter password to login" />
                </div>
                <div class="form-group">
                    <button type="button" class="btn login--btn btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    require_once TEMPLATES_PATH.'/footer.php';
?>
