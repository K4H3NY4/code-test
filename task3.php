<html>
<link rel="stylesheet" href="style.css">

<div class="container">
<h1>Task 3</h1>


<p> Enter numbers and separate them using , for example 1,2,3,4,5,6,7 </p>

<form action="" method="post">

<input class="form-control" type="text" name="str">

<br>

<input name="run" type="submit" value="RUN TASK" class="btn btn-success" />    

<br><br>

<p>
	
	<?php 
if (isset($_POST['run'])){




// positive missing number 

function solution($A){//Our original array 

	$m = max($A); //Storing maximum value 
	if ($m < 1) 
	{		 
		// In case all values in our array are negative 
		return 1; 
	} 
	if (sizeof($A) == 1) 
	{ 
		//If it contains only one element 
		if ($A[0] == 1) 
			return 2 ; 
		else
			return 1 ; 
	}		 
	$l = array_fill(0, $m, NULL); 
	for($i = 0; $i < sizeof($A); $i++) 
	{		 
		if( $A[$i] > 0) 
		{ 
			if ($l[$A[$i] - 1] != 1) 
			{ 
				
				//Changing the value status at the index of our list 
				$l[$A[$i] - 1] = 1; 
			} 
		} 
	} 
	for ($i = 0;$i < sizeof($l); $i++) 
	{ 
		
		//Encountering first 0, i.e, the element with least value 
		if ($l[$i] == 0) 
			return $i+1; 
	} 
			//In case all values are filled between 1 and m 
	return $i+2;	 
} 


//array( put your test numbers here sepatated with a comma)
$str = $_POST['str'];
$A = explode(",",$str);



foreach ($A as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " is numeric <br>", PHP_EOL;
    } else {
        echo var_export($element, true) . " is NOT numeric <br>", PHP_EOL;
    }
}

echo ('<br> Smallest missing integer from the array is:');

echo solution($A); 


return 0; 

}

?> 

</p>

</form>

</html>