<!-- ===============================================
================= HEADER Content ===================
================================================ -->
<section id="header">
    <header class="clearfix">
        <!-- Branding -->
        <div class="branding">
            <a class="brand" href=".">
                <span>SIEU THI THU NUOI</span>
            </a>
            <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
        </div>
        <!-- Branding end -->
        <!-- Left-side navigation -->
        <ul class="nav-left pull-left list-unstyled list-inline">
            <li class="sidebar-collapse divided-right">
                <a role="button" tabindex="0" class="collapse-sidebar">
                    <i class="fa fa-outdent"></i>
                </a>
            </li>
        </ul>
        <!-- Left-side navigation end -->

        <!-- Search -->
        <div class="search" id="main-search">
            <input type="text" class="form-control underline-input" placeholder="Search...">
        </div>
        <!-- Search end -->
        <!-- Left-side navigation -->
        <ul class="nav-left pull-left list-unstyled list-inline">
            <li class="dropdown divided-right settings">
                <a role="button" tabindex="0" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </a>
                <ul class="dropdown-menu with-arrow animated littleFadeInUp" role="menu">
                    <li>

                        <ul class="color-schemes list-inline">
                            <li class="title">Header Color:</li>
                            <li><a role="button" tabindex="0" class="scheme-drank header-scheme" data-scheme="scheme-default"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-black header-scheme" data-scheme="scheme-black"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-greensea header-scheme" data-scheme="scheme-greensea"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-cyan header-scheme" data-scheme="scheme-cyan"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-lightred header-scheme" data-scheme="scheme-lightred"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-light header-scheme" data-scheme="scheme-light"></a></li>
                            <li class="title">Branding Color:</li>
                            <li><a role="button" tabindex="0" class="scheme-drank branding-scheme" data-scheme="scheme-default"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-black branding-scheme" data-scheme="scheme-black"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-greensea branding-scheme" data-scheme="scheme-greensea"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-cyan branding-scheme" data-scheme="scheme-cyan"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-lightred branding-scheme" data-scheme="scheme-lightred"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-light branding-scheme" data-scheme="scheme-light"></a></li>
                            <li class="title">Sidebar Color:</li>
                            <li><a role="button" tabindex="0" class="scheme-drank sidebar-scheme" data-scheme="scheme-default"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-black sidebar-scheme" data-scheme="scheme-black"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-greensea sidebar-scheme" data-scheme="scheme-greensea"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-cyan sidebar-scheme" data-scheme="scheme-cyan"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-lightred sidebar-scheme" data-scheme="scheme-lightred"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-light sidebar-scheme" data-scheme="scheme-light"></a></li>
                            <li class="title">Active Color:</li>
                            <li><a role="button" tabindex="0" class="scheme-drank color-scheme" data-scheme="drank-scheme-color"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-black color-scheme" data-scheme="black-scheme-color"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-greensea color-scheme" data-scheme="greensea-scheme-color"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-cyan color-scheme" data-scheme="cyan-scheme-color"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-lightred color-scheme" data-scheme="lightred-scheme-color"></a></li>
                            <li><a role="button" tabindex="0" class="scheme-light color-scheme" data-scheme="light-scheme-color"></a></li>
                        </ul>

                    </li>

                    <li>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-xs-8 control-label">Fixed header</label>
                                <div class="col-xs-4 control-label">
                                    <div class="onoffswitch lightred small">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="fixed-header" checked="">
                                        <label class="onoffswitch-label" for="fixed-header">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-xs-8 control-label">Fixed aside</label>
                                <div class="col-xs-4 control-label">
                                    <div class="onoffswitch lightred small">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="fixed-aside" checked="">
                                        <label class="onoffswitch-label" for="fixed-aside">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
                    <!-- Left-side navigation end -->
        <!-- Right-side navigation -->
        <?php if(isset($user)): ?>
        <ul class="nav-right pull-right list-inline">
            <li class="dropdown users">

                <a href class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                    <span class="badge bg-lightred">2</span>
                </a>

                <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInUp" role="menu">

                    <div class="panel-heading">
                        You have <strong>2</strong> requests
                    </div>

                    <ul class="list-group">

                        <li class="list-group-item">
                            <a role="button" tabindex="0" class="media">
                                <span class="pull-left media-object thumb thumb-sm">
                                    <img src="public/admin/images/arnold-avatar.jpg" alt="" class="img-circle">
                                </span>
                                <div class="media-body">
                                    <span class="block">Arnold sent you a request</span>
                                    <small class="text-muted">15 minutes ago</small>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a role="button" tabindex="0" class="media">
                                <span class="pull-left media-object  thumb thumb-sm">
                                    <img src="public/admin/images/george-avatar.jpg" alt="" class="img-circle">
                                </span>
                                <div class="media-body">
                                    <span class="block">George sent you a request</span>
                                    <small class="text-muted">5 hours ago</small>
                                </div>
                            </a>
                        </li>

                    </ul>

                    <div class="panel-footer">
                        <a role="button" tabindex="0">Show all requests <i class="fa fa-angle-right pull-right"></i></a>
                    </div>

                </div>

            </li>

            <li class="dropdown messages">
                <a href class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope"></i>
                    <span class="badge bg-lightred">4</span>
                </a>
                <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInDown" role="menu">

                    <div class="panel-heading">
                        You have <strong>4</strong> messages
                    </div>

                    <ul class="list-group">

                        <li class="list-group-item">
                            <a role="button" tabindex="0" class="media">
                                <span class="pull-left media-object thumb thumb-sm">
                                    <img src="public/admin/images/ici-avatar.jpg" alt="" class="img-circle">
                                </span>
                                <div class="media-body">
                                    <span class="block">Imrich sent you a message</span>
                                    <small class="text-muted">12 minutes ago</small>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a role="button" tabindex="0" class="media">
                                <span class="pull-left media-object  thumb thumb-sm">
                                    <img src="public/admin/images/peter-avatar.jpg" alt="" class="img-circle">
                                </span>
                                <div class="media-body">
                                    <span class="block">Peter sent you a message</span>
                                    <small class="text-muted">46 minutes ago</small>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a role="button" tabindex="0" class="media">
                                <span class="pull-left media-object  thumb thumb-sm">
                                    <img src="public/admin/images/random-avatar1.jpg" alt="" class="img-circle">
                                </span>
                                <div class="media-body">
                                    <span class="block">Bill sent you a message</span>
                                    <small class="text-muted">1 hour ago</small>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a role="button" tabindex="0" class="media">
                                <span class="pull-left media-object  thumb thumb-sm">
                                    <img src="public/admin/images/random-avatar3.jpg" alt="" class="img-circle">
                                </span>
                                <div class="media-body">
                                    <span class="block">Ken sent you a message</span>
                                    <small class="text-muted">3 hours ago</small>
                                </div>
                            </a>
                        </li>

                    </ul>

                    <div class="panel-footer">
                        <a role="button" tabindex="0">Show all messages <i class="pull-right fa fa-angle-right"></i></a>
                    </div>

                </div>

            </li>

            <li class="dropdown notifications">

                <a href class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <span class="badge bg-lightred">3</span>
                </a>

                <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInLeft">

                    <div class="panel-heading">
                        You have <strong>3</strong> notifications
                    </div>

                    <ul class="list-group">

                        <li class="list-group-item">
                            <a role="button" tabindex="0" class="media">
                                <span class="pull-left media-object media-icon bg-danger">
                                    <i class="fa fa-ban"></i>
                                </span>
                                <div class="media-body">
                                    <span class="block">User Imrich cancelled account</span>
                                    <small class="text-muted">6 minutes ago</small>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a role="button" tabindex="0" class="media">
                                <span class="pull-left media-object media-icon bg-primary">
                                    <i class="fa fa-bolt"></i>
                                </span>
                                <div class="media-body">
                                    <span class="block">New user registered</span>
                                    <small class="text-muted">12 minutes ago</small>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a role="button" tabindex="0" class="media">
                                <span class="pull-left media-object media-icon bg-greensea">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <div class="media-body">
                                    <span class="block">User Robert locked account</span>
                                    <small class="text-muted">18 minutes ago</small>
                                </div>
                            </a>
                        </li>

                    </ul>

                    <div class="panel-footer">
                        <a role="button" tabindex="0">Show all notifications <i class="fa fa-angle-right pull-right"></i></a>
                    </div>

                </div>

            </li>

            <li class="dropdown nav-profile">

                <a href class="dropdown-toggle" data-toggle="dropdown">
                    <img src="public/admin/images/profile-photo.jpg" alt="" class="img-circle size-30x30">
                    <span>Final Boss <i class="fa fa-angle-down"></i></span>
                </a>

                <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                    <li>
                        <a href="admin.php?controller=user&amp;action=info" role="button" tabindex="0">
                            <span class="badge bg-greensea pull-right">86%</span>
                            <i class="fa fa-user"></i>Profile
                        </a>
                    </li>
                    <li>
                        <a role="button" tabindex="0">
                            <span class="label bg-lightred pull-right">new</span>
                            <i class="fa fa-check"></i>Tasks
                        </a>
                    </li>
                    <li>
                        <a role="button" tabindex="0">
                            <i class="fa fa-cog"></i>Settings
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a role="button" tabindex="0">
                            <i class="fa fa-lock"></i>Lock
                        </a>
                    </li>
                    <li>
                        <a href="admin.php?controller=home&amp;action=logout" role="button" tabindex="0">
                            <i class="fa fa-sign-out"></i>Logout
                        </a>
                    </li>

                </ul>

            </li>

            <li class="toggle-right-sidebar">
                <a role="button" tabindex="0">
                    <i class="fa fa-comments"></i>
                </a>
            </li>
        </ul>
        <?php endif; ?>
        <!-- Right-side navigation end -->
    </header>
</section>
<!--/ HEADER Content  -->