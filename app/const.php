<?php
/* Globals const */
define('CONTROLLERS_NS', DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR);
define('MODELS_NS', DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR);
define('VIEWS_NS', DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

/* Имена файлов: views */
define('USER_AUTH_FILE', 'views/login-form.php');
define('INDEX_FILE', 'views/index.php');
define('TASK_CREATE_FILE', 'views/task_create.php');
define('UPDATE_FILE', 'views/update.php');
define('IMAGE_DIR', $_SERVER["DOCUMENT_ROOT"] . '/web/img/');

/* Шаблон для страниц */
define('LAYOUT_FILE', $_SERVER["DOCUMENT_ROOT"] . '/views/layout/layout.php');

/* Константы для работы с БД */
define('SERVER', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'beejee');