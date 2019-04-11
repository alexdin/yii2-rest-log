<?php

 require __DIR__ . '/bootstrap.php';

 $config = require __DIR__ . '/config.php';

// instantiate and configure the application
(new yii\web\Application($config))->run();
