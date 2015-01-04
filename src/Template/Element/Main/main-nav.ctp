<!-- 2. $MAIN_NAVIGATION ===========================================================================

	Main navigation
-->
<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
    <!-- Main menu toggle -->
    <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span>
    </button>

    <div class="navbar-inner">
        <!-- Main navbar header -->
        <div class="navbar-header">

            <!-- Logo -->
            <a href="/" class="navbar-brand">
                <div><?php echo $this->Html->image("main-navbar-logo.png"); ?></div>
                TrackSys
            </a>

            <!-- Main navbar toggle -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

        </div>
        <!-- / .navbar-header -->

        <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
            <div>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">First item</a></li>
                            <li><a href="#">Second item</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Third item</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- / .navbar-nav -->

                <div class="right clearfix">
                    <ul class="nav navbar-nav pull-right right-navbar-nav">

                        <!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================

                            Navbar Icon Buttons

                            NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

                            Classes:
                            * 'nav-icon-btn-info'
                            * 'nav-icon-btn-success'
                            * 'nav-icon-btn-warning'
                            * 'nav-icon-btn-danger'
                        -->

                        <?php echo $this->element("Main/nav-notifications"); ?>

                        <!-- /3. $END_NAVBAR_ICON_BUTTONS -->

                        <li>
                            <form class="navbar-form pull-left">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </li>
                        <?php echo $this->element("Main/user-nav"); ?>
                    </ul>
                    <!-- / .navbar-nav -->
                </div>
                <!-- / .right -->
            </div>
        </div>
        <!-- / #main-navbar-collapse -->
    </div>
    <!-- / .navbar-inner -->
</div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->

