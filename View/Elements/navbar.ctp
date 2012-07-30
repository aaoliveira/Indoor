<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <?php echo $this->Html->link(__('Linux Ap'), '/admin', array('class' => 'brand')); ?>
            <ul class="nav">
                <li>
                    <?php echo $this->Html->link(__('Dashboard'), '/admin'); ?>
                </li>
                <li>
                    <?php echo $this->Html->link(__('Posts'), array('controller' => 'posts', 'action' => 'index')); ?>
                </li>
                <li>
                    <?php echo $this->Html->link(__('Certifications'), array('controller' => 'certifications', 'action' => 'index')); ?>
                </li>
                <li>
                    <?php echo $this->Html->link(__('Customers'), array('controller' => 'customers', 'action' => 'index')); ?>
                </li>
                <li>
                    <?php echo $this->Html->link(__('Services'), array('controller' => 'services', 'action' => 'index')); ?>
                </li>
                <li class="dropdown">
                    <?php echo $this->Html->link(__('Pages') . $this->Html->tag('b', '', array('class' => 'caret')), array('controller' => 'pages', 'action' => 'index'), array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
                    <ul class="dropdown-menu">
                        <li>
                            <?php echo $this->Html->link(__('Contact'), "#"); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(__('About'), "#"); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?>
                </li>
                <li>
                    <?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?>
                </li>
            </ul>
        </div>
    </div>
</div>