<?php

Router::connect('/admin', array('controller' => 'pages', 'action' => 'index', 'plugin' => 'admin'));
Router::connect('/admin/entrar', array('controller' => 'users', 'action' => 'login', 'plugin' => 'admin'));
