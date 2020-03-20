<?php
  // Load Config
  require_once 'config/config.php';

  // Autoload all Core Libraries automaticly - 
  // to replace ex.: require_once 'libraries/controller.php';
// Load helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

spl_autoload_register(function($className){
  require_once 'libraries/' . $className . '.php';
});
  
 
  
