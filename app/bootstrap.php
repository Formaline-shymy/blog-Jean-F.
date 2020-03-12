<?php
  // Load Config
  require_once 'config/config.php';

  // Autoload all Core Libraries automaticly - 
  // to replace ex.: require_once 'libraries/controller.php';

  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });
  
