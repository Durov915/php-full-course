<?php

// Define a function called myfunction
function myfunction(){
    // Define a local variable $varible and assign it a string value
    $varible = "this is normal local function!";
    // Output the value of $varible and add a line break
    echo $varible."<br>";
}

// Call the myfunction() to execute its code
myfunction();

?>



<?php
//globle variables

// Define a function called myfunction2
function myfunction2(){
    // Declare $varible2 as a global variable
    global $varible2;
    // Assign a new string value to $varible2
    $varible2 = "this is a new value for global variable";
}

// Call the function myfunction2() to change the global variable
myfunction2();

// Output the changed global variable $varible2
echo $varible2."<br>"; // Output the changed global variable


?>





<?php

// Define a function named myfunction3
function myfunction3(){
    // Declare a local static variable $varible3 with an initial value of 0
      static $varible3 = 0;
    // Increment the value of $varible3
    $varible3++;
    // Output the current value of $varible3
    echo $varible3; 
}   

// Call myfunction3() multiple times to see how the static variable behaves
myfunction3()."<br>"; // Outputs: 1
myfunction3(); // Outputs: 2
myfunction3(); // Outputs: 3
myfunction3(); // Outputs: 4
myfunction3(); // Outputs: 5
myfunction3(); // Outputs: 6

?>
