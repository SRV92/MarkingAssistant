<?php
    require_once 'resources/config.php';

    require_once TEMPLATES_PATH.'/header.php';

    require_once 'resources/library/class.tablerows.php';

    if (!$user->is_loggedin()) {
        $user->redirect('login.php');
    }

    $id = $_SESSION['user_session'];

    $stmt = $conn->prepare('SELECT * FROM users WHERE id=:id');
    $stmt->execute(array(':id' => $id));
    $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
?>
    <!-- <label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label> -->

    <div id="content" class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li><a href="#">Users Overview</a></li>
                        <li><a href="#">Students</a></li>
                        <li><a href="#">Mark Assignment</a></li>
                    </ul>
                </div>
                <div class="col-xs-10 dashboard__body">
                    <h2>Overview of <?php echo $userRow['user_name']; ?>'s dashboard </h2><hr />
                    <div class="row divider">
                        <div class="col-xs-12 section">

                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>user_name</th>
                                        <th>role_name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                    $role = '3';
                                    $stmt = $conn->prepare('SELECT users.id, users.user_name, roles.role_name FROM users
                                                            LEFT JOIN user_role ON user_role.user_id = users.id
                                                            LEFT JOIN roles ON user_role.role_id = roles.id WHERE roles.id
                                                            ');

                                    $stmt->execute(array($role));
                                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                                        echo $v;
                                    }

                                    // $stmt->execute(array($role));
                                    // while ($row = $stmt->fetch()) {
                                    //     print $row[0] . "<br />\n";
                                    // }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-xs-4 item">
                                <div class="section">
                                    <h3>Assignments to mark</h3><hr />
                                </div>
                            </div>
                            <div class="col-xs-4 item">
                                <div class="section">
                                    <h3>Assignments being marked</h3><hr />
                                </div>
                            </div>
                            <div class="col-xs-4 item">
                                <div class="section">
                                    <h3>Assignmets marked</h3><hr />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    require_once TEMPLATES_PATH.'/footer.php';
?>
