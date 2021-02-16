<html>
<link rel="stylesheet" href="style.css">

<div class="container">
<h1 class="">Task 1</h1>


  
<?php



if (isset($_POST['run'])){
  
//Replace the string 'django is a good dog' with any text
$x =$_POST['data'];

// replace the number of the to limit the characters you want
$length = $_POST['length'];


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

}

?>


<form method="post" >

 
<label>Lenth</label>
<input class="form-control" type="number" name="length">


<br>

<label for="">String</label><br>
<textarea name="data" id="" cols="50" rows="3" class="form-control"></textarea>


<br>
<input name="run" type="submit" value="RUN TASK" class="btn btn-success" />

<br>

<div class="p">
<?php
if (isset($_POST['run'])){
  
custom_echo($x,$length);
}

?>
</div>
</form>

</div>
</html>


