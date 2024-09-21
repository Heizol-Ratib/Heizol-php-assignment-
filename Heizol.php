<?php

function call_name(): string{
  $name = "HEIZOL HADIJAH RATIB";

return $name;
}

function my_age($Current_Year, $Dob): int{
  $age = $Current_Year - $Dob;
return $age;
}

function Home_Address(): string{
  $address = "Kasangati";
  return $address;
}
print ("Welcome Home  Mrs.".call_name()."<br>in ".Home_Address().
"<br>"."Your now ".my_age(2024,2003). "Years old.");

?>