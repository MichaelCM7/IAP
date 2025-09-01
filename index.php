<?php
  //Include the class file
  require "classes.php";

  //call the class
  //create an instance
  $sample = new Sample();

  //call the greet method
  echo $sample->greet();

  //call the week_day method
  echo $sample->week_day()
?>