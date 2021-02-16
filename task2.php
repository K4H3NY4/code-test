<html>
<link rel="stylesheet" href="style.css">

<div class="container">
    
<h1>Task 2</h1>



<form method="post" action="">

String 1

<input type="text" name="string1" class="form-control">

<br>

String 2

<input type="text" name="string2" class="form-control">

<br>

<input name="run" type="submit" value="RUN TASK" class="btn btn-success" />    

<p>

<?php

if (isset($_POST['run'])){

    
//Replace the string 'center' with any text
$string1 = $_POST['string1'];
echo "<br>the first string: $string1"; 

// Get the strings which 
// is to be checked 

//Replace the string 'centrey' with any text
$string2 = $_POST['string2'];
echo "<br> the second string: $string2"; 

// Check if both strings are equal 
echo "<br>Are both strings same: "; 


  

    $correct1= str_replace("$string1[-1]","$string2[-2]","$string1");
    $correct2 =str_replace("$string1[-2]","$string2[-1]","$string1");

    $correct3= str_replace("$string1[-2]","$string2[-1]","$string1");
    $correct4 =str_replace("$string1[-1]","$string2[-2]","$string1");
    

if (strcmp($string1, $string2) == 0) 
{ 
	echo "Yes"; 
} 

else if (strcmp($string1, $string2) > 0) //Because string1 has some character greater than string2 
{ 
    echo "No <br>"; 
    


    if ($string1 == $correct1) {
        echo('possible<br>');
        echo $correct1;
        echo('<br>');
        echo $correct2;
    }else{
        echo('Impossible<br>');
    }
 
} 

else if (strcmp($string1, $string2) < 0) //Because string2 has some character greater than string1 
{ 
    echo "No<br>"; 
    

    if ($string1 == $correct1) {
        echo('possible<br>');
        echo $correct1;
        echo('<br>');
        echo $correct2;
    }else{
        echo('Impossible<br>');
    }
    echo $correct1;
    echo('<br>');
    echo $correct2;
} 

}

?>
</p>
</form>
</div>
</html>