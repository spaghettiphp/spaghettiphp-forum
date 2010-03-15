<?php

define('SPAGHETTI_ROOT', dirname(dirname(__FILE__)));
define('SPAGHETTI_APP', SPAGHETTI_ROOT . '/app');

set_include_path(SPAGHETTI_ROOT . PATH_SEPARATOR . get_include_path());

define('BASE_URL', 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST']);
define('APP', SPAGHETTI_APP);

require 'lib/core/common/Object.php';
require 'lib/core/common/Config.php';
require 'lib/core/common/Inflector.php';

require 'lib/core/dispatcher/Dispatcher.php';
require 'lib/core/dispatcher/Mapper.php';

require 'lib/core/model/Model.php';

require 'lib/core/basics.php';
require 'lib/core/class_registry.php';
require 'lib/core/component.php';
require 'lib/core/connection.php';
require 'lib/core/controller.php';
require 'lib/core/cookie.php';
require 'lib/core/helper.php';
require 'lib/core/sanitize.php';
require 'lib/core/security.php';
require 'lib/core/session.php';
require 'lib/core/utils.php';
require 'lib/core/validation.php';
require 'lib/core/view.php';

require 'config/settings.php';
require 'config/routes.php';
require 'config/database.php';

require 'app/controllers/app_controller.php';
require 'app/models/app_model.php';