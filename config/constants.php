<?php

// define("PROJECT_FOLDER", "assembler-projects/php-employee-management-v2");
define("PROJECT_FOLDER", "assembler/week21/php-employee-management-v2");
define("BASE_URL", "http://$_SERVER[HTTP_HOST]" . "/" . PROJECT_FOLDER);
define("ROOT", $_SERVER["DOCUMENT_ROOT"] . "/" . PROJECT_FOLDER);
define("CONFIG", ROOT . "/config");
define("ASSETS", ROOT . "/assets");
define("RESOURCES", ROOT . "/resources");
define("SRC", ROOT . "/src");
define("LIBRARY", SRC . "/library");
define("LIFETIME", 600);
 