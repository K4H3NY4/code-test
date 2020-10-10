<html>
    <h1>Task 1</h1>
<?php

//Replace the string 'django is a good dog' with any text
$x = 'django is a good dog';

// replace the number of the to limit the characters you want
$length = 13;

function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    $x = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1', $x);
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length);
    $y = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1', $x);
    echo $y;
  }
}

custom_echo($x,$length);


?>



</html>