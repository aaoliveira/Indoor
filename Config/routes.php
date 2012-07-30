<?php

Router::connect('/admin', array('controller' => 'pages', 'action' => 'index', 'plugin' => 'indoor'));
Router::connect('/admin/entrar', array('controller' => 'users', 'action' => 'login', 'plugin' => 'indoor'));
