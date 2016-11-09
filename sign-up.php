<?php
    require_once 'resources/config.php';

    require_once TEMPLATES_PATH.'/header.php';

    if ($user->is_loggedin() != '') {
        $user->redirect('home.php');
    }

    if (isset($_POST['btn-signup'])) {
        $uname = trim($_POST['txt_uname']);
        $umail = trim($_POST['txt_umail']);
        $upass = trim($_POST['txt_upass']);

        if ($uname == '') {
            $error[] = 'provide username !';
        }
        elseif ($umail == '') {
            $error[] = 'provide email id !';
        }
        elseif (!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
            $error[] = 'Please enter a valid email address !';
        }
        elseif ($upass == '') {
            $error[] = 'provide password !';
        }
        elseif (strlen($upass) < 6) {
            $error[] = 'Password must be atleast 6 characters';
        }
        else {
            try {
                $stmt = $conn->prepare('SELECT user_name,user_email FROM users WHERE user_name=:uname OR user_email=:umail');
                $stmt->execute(array(':uname' => $uname, ':umail' => $umail));
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($row['user_name'] == $uname) {
                    $error[] = 'sorry username already taken !';
                } elseif ($row['user_email'] == $umail) {
                    $error[] = 'sorry email id already taken !';
                } else {
                    if ($user->register($fname, $lname, $uname, $umail, $upass)) {
                        $user->redirect('sign-up.php?joined');
                    }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

?>
<div id="content" class="base--form">
    <div class="container">
         <div class="form-container">
            <form method="post">
                <h2>Sign up.</h2><hr />
                <?php
                if (isset($error)) {
                    foreach ($error as $error) { // checks each input box for credentials
                        ?>
                      <div class="alert alert-danger">
                          <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                      </div>
                      <?php

                    }
                } elseif (isset($_GET['joined'])) {
                    ?>
                     <div class="alert alert-info">
                          <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
                     </div>
                     <?php

                }
                ?>
                <div class="form-group">
                <input type="text" class="form-control" name="txt_uname" placeholder="Enter Username" value="<?php if (isset($error)) {
                    echo $uname;
                }?>" />
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="txt_umail" placeholder="Enter E-Mail ID" value="<?php if (isset($error)) {
                    echo $umail;
                }?>" />
                </div>
                <div class="form-group">
                 <input type="password" class="form-control" name="txt_upass" placeholder="Enter Password" />
                </div>
                <div class="clearfix"></div><hr />
                <div class="form-group">
                 <button type="submit" class="btn btn-block btn-primary" name="btn-signup">
                     <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                    </button>
                </div>
                <br />
                <label>have an account ! <a href="index.php">Sign In</a></label>
            </form>
           </div>
    </div>
</div>

</body>
</html>
