<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('/admin/css/global');
        echo $this->Html->charset();
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <title><?php echo $title_for_layout; ?></title>
    </head>
    <body>
        <?php
        echo $this->fetch('content');
        echo $this->Html->script('/admin/js/jquery-1.7.2.min');
        echo $this->Html->script('/admin/js/bootstrap.min');
        echo $this->Html->script('/admin/js/admin.min');
        ?>
    </body>
</html>