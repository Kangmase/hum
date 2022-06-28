<?php 
$animals = array("cat", "dog", "snake", "ant", "lion"); 
echo "$animals[2]<br>";

foreach ($animals as $animal) {
  echo "$animal <br>";
}
?>
<?php 
$age = array("Rezky"=>"25", "Abduh"=>"29", "Iqbal"=>"33");
foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>