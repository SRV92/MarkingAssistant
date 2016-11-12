<?php
    require_once 'resources/config.php';

    require_once TEMPLATES_PATH.'/header.php';
?>

<div id="dashboard">
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-2 sidebar">
                <ul class="navigation navigation--light">
                    <li class="navigation__navItem">
                        <a href="" class="navLink">Item 1</a>
                    </li>
                    <li class="navigation__navItem">
                        <a href="" class="navLink">Item 2</a>
                    </li>
                    <li class="navigation__navItem">
                        <a href="" class="navLink">Item 3</a>
                    </li>
                    <li class="navigation__navItem">
                        <a href="" class="navLink">Item 4</a>
                    </li>
                </ul>
                <ul class="navigation navigation--dark">
                    <p class="navigation__text">This is the admin dashboard</p>
                </ul>
            </aside>
            <section class="col-md-10 content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content__header">
                            <h3>showing elements for application framework</h3><hr />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item item--filled">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item item--filled">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item item--filled">

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
