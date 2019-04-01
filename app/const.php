<?php
/* Имена файлов: views */
define('USER_AUTH_FILE', 'user_signIn.php');
define('INDEX_FILE', 'index.php');
define('TASK_CREATE_FILE', 'task_create.php');
define('SINGLE_TASK_FILE', 'single_task.php');
define('IMAGE_DIR', $_SERVER["DOCUMENT_ROOT"] . '/data/img/');

/* Текстовая база данных задач*/
define('TASK_DB', $_SERVER["DOCUMENT_ROOT"] . '/app/data/tasks.txt');

/* Шаблон для страниц */
define('LAYOUT_FILE', $_SERVER["DOCUMENT_ROOT"] . '/views/layout/layout.php');

/* Константы для работы с БД */
define('SERVER', 'localhost');
define('USER_NAME', 'Gurikin');
define('PASSWORD', '');
define('DB_NAME', 'beejee');