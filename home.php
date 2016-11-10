<?php
    require_once 'resources/config.php';

    require_once TEMPLATES_PATH.'/header.php';

    if (!$user->is_loggedin()) {
        $user->redirect('login.php');
    }

    $user_id = $_SESSION['user_session'];

    $stmt = $conn->prepare('SELECT * FROM users WHERE user_id=:user_id');
    $stmt->execute(array(':user_id' => $user_id));
    $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
?>
    <!-- <label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label> -->

    <div id="content" class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 sidebar">
                    <ul class="nav nav-sidebar">
                        <li><a href="#">Students</a></li>
                        <li><a href="#">Mark Assignment</a></li>
                    </ul>
                </div>
                <div class="col-xs-9 dashboard__body">
                    <h2>Overview of <?php echo $userRow['user_name']; ?>'s dashboard </h2><hr />                    
                </div>
            </div>
        </div>
    </div>

<?php
    require_once TEMPLATES_PATH.'/footer.php';
?>
