#You must use the String-to-Integer and exception handling constructs built into your submission language.
#If you attempt to use loops/conditional statements, you will get a  score.

<?php



$S = rtrim(fgets(STDIN), "\r\n");

// function gettingonly integar value if string found it's create an TypeError exception.
// php 7.0 or above.

function checkVal(int $val)
{
    echo $val;
}

try{
    
    checkVal($S);
    
}catch(TypeError $e){

    echo "Bad String";
    
}

