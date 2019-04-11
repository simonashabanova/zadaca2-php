<?php

class Avtomobil {
 
  public $comp; 
  public $color = 'black';
  public $hasSunRoof = true;
 
  public function hello()
  {
    return "beep";
  }
}
 

$bmw = new avtomobil ();
$mercedes = new avtomobil ();

$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";
 
echo $bmw -> color;
echo "<br />";
echo $mercedes -> color;
echo "<br />";
echo $bmw -> comp;
echo "<br />";
echo $mercedes -> comp; 
echo "<hr />";
 
?>
