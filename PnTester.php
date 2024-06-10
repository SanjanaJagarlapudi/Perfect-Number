<?php
function is_perfect_num(){
   
    $testInputOne = 6;

    $expectedOutputOne = True;

    assert (perfectNumber($testInputOne) == $expectedOutputOne, 'Method not returning the correct ouput');
}
perfectNumberTester();

?>