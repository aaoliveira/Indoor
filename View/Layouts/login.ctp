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
        <?php echo $content_for_layout;?>
    </body>
</html>
