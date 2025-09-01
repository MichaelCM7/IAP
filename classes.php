<?php
  //create class
  class Sample{
    public function greet(){
      return "Hello from Sample class <br>";
    }

    public function week_day(){
      return "Today is ". date("l");
    }
  }

  // //call the class

  // //create an instance
  // $sample = new Sample();

  // //call the greet method
  // echo $sample->greet();

  // //call the week_day method
  // echo $sample->week_day()

?>