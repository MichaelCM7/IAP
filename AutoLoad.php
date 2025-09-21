<?php
  require 'Plugins/PHPMailer/vendor/autoload.php';
  require 'conf.php';
  $directory = array("global", "Components", "FormComponents");

  spl_autoload_register(function ($class_name) use ($directory) {
      foreach ($directory as $dir) {
          if (file_exists($dir . '/' . $class_name . '.php')) {
              require $dir . '/' . $class_name . '.php';
          }
      }
  });
  // Now you can create instances of classes without manually including their files
  //$sample = new sample();
  $components = new Components();
  $formComponents = new FormComponents();
?>
