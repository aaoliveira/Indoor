<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset('UTF-8') . "\n"; ?>

        <!-- Required Stylesheets -->
        <?php echo $this->Html->css('/css/reset.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>
        <?php echo $this->Html->css('/css/text.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>
        <?php echo $this->Html->css('/css/fonts/ptsans/stylesheet.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>
        <?php echo $this->Html->css('/css/fluid.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>


        <?php echo $this->Html->css('/css/mws.style.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>
        <?php echo $this->Html->css('/css/icons/icons.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>

        <!-- Demo and Plugin Stylesheets -->
        <?php echo $this->Html->css('/css/demo.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>

        <?php echo $this->Html->css('/plugins/colorpicker/colorpicker.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>
        <?php echo $this->Html->css('/plugins/jimgareaselect/css/imgareaselect-default.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>
        <?php echo $this->Html->css('/plugins/fullcalendar/fullcalendar.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>
        <?php echo $this->Html->css('/plugins/fullcalendar/fullcalendar.print.css', 'stylesheet', array('media' => 'print')) . "\n"; ?>
        <?php echo $this->Html->css('/tipsy/tipsy.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>
        <?php echo $this->Html->css('/plugins/sourcerer/Sourcerer-1.2.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>
        <?php echo $this->Html->css('/plugins/jgrowl/jquery.jgrowl.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>
        <?php echo $this->Html->css('/plugins/spinner/spinner.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>
        <?php echo $this->Html->css('/css/jui/jquery.ui.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>

        <!-- Theme Stylesheet -->
        <?php echo $this->Html->css('/css/mws.theme.css', 'stylesheet', array('media' => 'screen')) . "\n"; ?>

        <!-- JavaScript Plugins -->

        <?php echo $this->Html->script('/js/jquery-1.7.1.min.js') . "\n"; ?>

        <?php echo $this->Html->script('/plugins/jimgareaselect/jquery.imgareaselect.min.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/jquery.dualListBox-1.3.min.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/jgrowl/jquery.jgrowl.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/jquery.filestyle.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/fullcalendar/fullcalendar.min.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/jquery.dataTables.js') . "\n"; ?>
        <!--[if lt IE 9]>
        <?php echo $this->Html->script('/plugins/flot/excanvas.min.js') . "\n"; ?>
        <![endif]-->
        <?php echo $this->Html->script('/plugins/flot/jquery.flot.min.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/flot/jquery.flot.pie.min.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/flot/jquery.flot.stack.min.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/flot/jquery.flot.resize.min.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/colorpicker/colorpicker.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/tipsy/jquery.tipsy.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/sourcerer/Sourcerer-1.2.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/jquery.placeholder.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/jquery.validate.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/jquery.mousewheel.js') . "\n"; ?>
        <?php echo $this->Html->script('/plugins/spinner/ui.spinner.js') . "\n"; ?>
        <?php echo $this->Html->script('/js/jquery-ui.js') . "\n"; ?>

        <?php echo $this->Html->script('/js/mws.js') . "\n"; ?>
        <?php echo $this->Html->script('/js/demo.js') . "\n"; ?>
        <?php echo $this->Html->script('/js/themer.js') . "\n"; ?>

        <?php echo $this->Html->script('/js/demo.dashboard.js') . "\n"; ?>

        <script type="text/javascript">
            $(document).ready(function() {
                $("div#mws-login .mws-login-back").mouseover(function(event) {
                    $(this).find("a").animate({'left':0})
                }).mouseout(function(event) {
                    $(this).find("a").animate({'left':70})
                });
            });
        </script>
        
        <?php echo $this->Html->tag('title', $title_for_layout) . "\n"; ?>

    </head>
    <body>
        <!-- Themer -->  
        <div id="mws-themer">
            <div id="mws-themer-hide"></div>
            <div id="mws-themer-content">
                <div class="mws-themer-section">
                    <label for="mws-theme-presets">Presets</label> <select id="mws-theme-presets"></select>
                </div>
                <div class="mws-themer-separator"></div>
                <div class="mws-themer-section">
                    <ul>
                        <li><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                        <li><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                        <li><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                    </ul>
                </div>
                <div class="mws-themer-separator"></div>
                <div class="mws-themer-section">
                    <ul>
                        <li><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
                    </ul>
                </div>
                <div class="mws-themer-separator"></div>
                <div class="mws-themer-section">
                    <button class="mws-button red small" id="mws-themer-getcss">Get CSS</button>
                </div>
            </div>
            <div id="mws-themer-css-dialog">
                <div class="mws-form">
                    <div class="mws-form-row" style="padding:0;">
                        <div class="mws-form-item">
                            <textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Themer End -->
        <!-- Header Wrapper -->
        <div id="mws-header" class="clearfix">

            <!-- Logo Wrapper -->
            <div id="mws-logo-container">
                <div id="mws-logo-wrap">
                    <img src="img/core/mws-logo.png" alt="mws admin" />
                </div>
            </div>

            <!-- User Area Wrapper -->
            <div id="mws-user-tools" class="clearfix">

                <!-- User Notifications -->
                <div id="mws-user-notif" class="mws-dropdown-menu">
                    <a href="#" class="mws-i-24 i-alert-2 mws-dropdown-trigger">Notifications</a>
                    <span class="mws-dropdown-notif">35</span>
                    <div class="mws-dropdown-box">
                        <div class="mws-dropdown-content">
                            <ul class="mws-notifications">

                                <!-- Notification Content -->
                                <li class="read">
                                    <a href="#">
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                        <span class="time">
                                            January 21, 2012
                                        </span>
                                    </a>
                                </li>
                                <li class="read">
                                    <a href="#">
                                        <span class="message">
                                            Lorem ipsum dolor sit amet
                                        </span>
                                        <span class="time">
                                            January 21, 2012
                                        </span>
                                    </a>
                                </li>
                                <li class="unread">
                                    <a href="#">
                                        <span class="message">
                                            Lorem ipsum dolor sit amet
                                        </span>
                                        <span class="time">
                                            January 21, 2012
                                        </span>
                                    </a>
                                </li>
                                <li class="unread">
                                    <a href="#">
                                        <span class="message">
                                            Lorem ipsum dolor sit amet
                                        </span>
                                        <span class="time">
                                            January 21, 2012
                                        </span>
                                    </a>
                                </li>
                                <!-- End Notification Content -->

                            </ul>
                            <div class="mws-dropdown-viewall">
                                <a href="#">View All Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Messages -->
                <div id="mws-user-message" class="mws-dropdown-menu">
                    <a href="#" class="mws-i-24 i-message mws-dropdown-trigger">Messages</a>
                    <span class="mws-dropdown-notif">35</span>
                    <div class="mws-dropdown-box">
                        <div class="mws-dropdown-content">
                            <ul class="mws-messages">

                                <!-- Message Content -->
                                <li class="read">
                                    <a href="#">
                                        <span class="sender">John Doe</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                        <span class="time">
                                            January 21, 2012
                                        </span>
                                    </a>
                                </li>
                                <li class="read">
                                    <a href="#">
                                        <span class="sender">John Doe</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet
                                        </span>
                                        <span class="time">
                                            January 21, 2012
                                        </span>
                                    </a>
                                </li>
                                <li class="unread">
                                    <a href="#">
                                        <span class="sender">John Doe</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet
                                        </span>
                                        <span class="time">
                                            January 21, 2012
                                        </span>
                                    </a>
                                </li>
                                <li class="unread">
                                    <a href="#">
                                        <span class="sender">John Doe</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet
                                        </span>
                                        <span class="time">
                                            January 21, 2012
                                        </span>
                                    </a>
                                </li>
                                <!-- End Messages -->

                            </ul>
                            <div class="mws-dropdown-viewall">
                                <a href="#">View All Messages</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Functions -->
                <div id="mws-user-info" class="mws-inset">
                    <div id="mws-user-photo">
                        <img src="example/profile.jpg" alt="User Photo" />
                    </div>
                    <div id="mws-user-functions">
                        <div id="mws-username">
                            Hello, John Doe
                        </div>
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="index-2.html">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End User Functions -->

            </div>
        </div>

        <!-- Main Wrapper -->
        <div id="mws-wrapper">
            <!-- Necessary markup, do not remove -->
            <div id="mws-sidebar-stitch"></div>
            <div id="mws-sidebar-bg"></div>

            <!-- Sidebar Wrapper -->
            <div id="mws-sidebar">

                <!-- Search Box -->
                <div id="mws-searchbox" class="mws-inset">
                    <form action="http://www.malijuwebshop.com/themes/mws-admin/dashboard.html">
                        <input type="text" class="mws-search-input" />
                        <input type="submit" class="mws-search-submit" />
                    </form>
                </div>

                <!-- Main Navigation -->
                <div id="mws-navigation">
                    <ul>
                        <li class="active"><a href="dashboard.html" class="mws-i-24 i-home">Dashboard</a></li>
                        <li><a href="charts.html" class="mws-i-24 i-chart">Charts</a></li>
                        <li><a href="calendar.html" class="mws-i-24 i-day-calendar">Calendar</a></li>
                        <li><a href="files.html" class="mws-i-24 i-file-cabinet">File Manager</a></li>
                        <li><a href="table.html" class="mws-i-24 i-table-1">Table</a></li>
                        <li>
                            <a href="#" class="mws-i-24 i-list">Forms</a>
                            <ul>
                                <li><a href="form_layouts.html">Layouts</a></li>
                                <li><a href="form_elements.html">Elements</a></li>
                            </ul>
                        </li>
                        <li><a href="widgets.html" class="mws-i-24 i-cog">Widgets</a></li>
                        <li><a href="typography.html" class="mws-i-24 i-text-styling">Typography</a></li>
                        <li><a href="grids.html" class="mws-i-24 i-blocks-images">Grids &amp; Panels</a></li>
                        <li><a href="gallery.html" class="mws-i-24 i-polaroids">Gallery</a></li>
                        <li><a href="error.html" class="mws-i-24 i-alert-2">Error Page</a></li>
                        <li>
                            <a href="icons.html" class="mws-i-24 i-pacman">
                                Icons <span class="mws-nav-tooltip">2000+</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->

            </div>


            <!-- Container Wrapper -->
            <div id="mws-container" class="clearfix">

                <!-- Main Container -->
                <div class="container">
                    <?php echo $content_for_layout; ?>
                </div>
                <!-- End Main Container -->

                <!-- Footer -->
                <div id="mws-footer">
                    Copyright Your Website 2012. All Rights Reserved.
                </div>
                <!-- End Footer -->

            </div>
            <!-- End Container Wrapper -->

        </div>
        <!-- End Main Wrapper -->

    </body>
</html>
