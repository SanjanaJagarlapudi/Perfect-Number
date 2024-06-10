<?php
/**
 * Author: Sanjana Jagarlapudi 
 * This program tests if inputted numbers are perfect numbers. 
 * A perfect number is a positive integer that is equal to the sum of its proper divisors.
 */


/**
 * This function takes in an number and determines whether it is a perfect number by comparing the sum of its divisors to itself.
 * parameters: input number --> the number being checked for being a perfect number
 * return: True if the number is a perfect number, False if not 
 */
function is_perfect_num($inputNum){
    //Validating input
    $positiveChecker = 0;
    $zeroChecker = 0;
    if($inputNum < $positiveChecker OR (!is_int($inputNum))){
        echo "Input: $inputNum, Output: Invalid Input: input must be a positive integer <br>";
        return null; //It is not possible to evaluate if a negatice or non number is a magic number, thus if this is input, the output must be null
        //throw new InvalidArgumentException("Input must be a positive integer");
    }
    else if($inputNum == $zeroChecker){ //
        echo "Input: 0, Output: No, this is not a perfect Number. Proof: 0 is not a perfect number because anything times 0 is 0, thus making all numbers its divisors. 
                Since the addition of all numbers cannot equal 0, 0 is not a perfect number. <br>";
        return False;
    }
    //Finding divisors 
    $divisors = array();
    $noRemainder = 0;
    for($i = 1; $i < $inputNum; $i++ ){ 
        if($inputNum % $i == $noRemainder){
            array_push($divisors, $i);
        }
    }
    //Calculating sum of divisors
    $totalSum = array_sum($divisors);
    //Returning appropriate values and printing out messages accordingly
    if($totalSum == $inputNum){
        $resultMessage = "Input: $inputNum, Output: Yes, this is a perfect number. Proof: " . "$inputNum" . ' is a perfect number because the sum of its divisors: ';
        foreach($divisors as $j){
            $resultMessage .= "$j" . ' ';
        }
        echo "$resultMessage" . ', is equal to ' . "$totalSum " . 'which is equal to ' . "itself ($inputNum)" . '. <br>';
        return True;
        
    }
    else{
        $resultMessage = "Input: $inputNum, Output: No, this is not a perfect number. Proof: " . "$inputNum" . ' is not a perfect number because the sum of its divisors: ';
        foreach($divisors as $j){
            $resultMessage .= "$j" . ' ';
        }
        echo "$resultMessage" . ', is equal to ' . "$totalSum " . 'which is not equal to ' . "itself ($inputNum)" . '. <br>';
        return False;
    }
}
/**
 * Unit Testing
 * This tester function tests for good, bad and ugly inputs (each of these cases having three individual test cases of their own). 
 * In each case, first the result and proof of calling is_perfect_num on the test input is printed out. Then, the Input (an integer), 
 * Expected Output (a bool) and Actual Output (a bool) are printed out. 
 * In this function, printing out booleans works as such: True --> 1, False --> 0, null --> nothing.
 * This function takes in no parameters.
 */
function perfectNumberTester(){
    echo "Good Input Tests: <br>";
   //Good Input Tests
    echo "<br> Test 1 <br>";
    $goodTest1Input = 6.3;
    $goodTest1ExpOutput = True;
    $goodTest1actualOutput = is_perfect_num($goodTest1Input);
    if($goodTest1ExpOutput == (string) null){ //code to make sure that if exp value is changed, the str messages in the output are changed as well
        $goodTest1StrExpOutput = "null";
    }
    else if($goodTest1ExpOutput == (int) False){
        $goodTest1StrExpOutput = "False";
    }
    else{
        $goodTest1StrExpOutput = "True";
    }
    echo "Is output from is_perfect_num($goodTest1Input) equal to $goodTest1StrExpOutput --> ";
    echo "Input: " . "$goodTest1Input" . ", Expected Output: " . "$goodTest1ExpOutput" . ", Actual Output: " . "$goodTest1actualOutput <br>";
    //Since we are using the triple "=", we are checking for correct type AND value at the same time
    assert ($goodTest1actualOutput === $goodTest1ExpOutput, '<br> No, Test Failed: Function not returning the correct ouput');
    echo "Yes, good input test 1 passed! <br>";

    echo "<br> Test 2 <br>";
    $goodTest2Input = 7;
    $goodTest2ExpOutput = (int) False; 
    $goodTest2actualOutput = (int) is_perfect_num($goodTest2Input);
    if($goodTest2ExpOutput == (string) null){ 
        $goodTest2StrExpOutput = "null";
    }
    else if($goodTest2ExpOutput == (int) False){
        $goodTest2StrExpOutput = "False";
    }
    else{
        $goodTest2StrExpOutput = "True";
    }
    echo "Is output from is_perfect_num($goodTest2Input) equal to $goodTest2StrExpOutput --> ";
    echo "Input: " . "$goodTest2Input" . ", Expected Output: " . "$goodTest2ExpOutput" . ", Actual Output: " . "$goodTest2actualOutput <br>";
    assert ($goodTest2actualOutput === $goodTest2ExpOutput, '<br> No, Test Failed: Function not returning the correct ouput');
    echo "Yes, good input test 2 passed! <br>";

    echo "<br> Test 3 <br>";
    $goodTest3Input = 0;
    $goodTest3ExpOutput = (int) False;
    $goodTest3actualOutput = (int) is_perfect_num($goodTest3Input);
    if($goodTest3ExpOutput == (string) null){ 
        $goodTest3StrExpOutput = "null";
    }
    else if($goodTest3ExpOutput == (int) False){
        $goodTest3StrExpOutput = "False";
    }
    else{
        $goodTest3StrExpOutput = "True";
    }
    echo "Is output from is_perfect_num($goodTest3Input) equal to $goodTest3StrExpOutput --> ";
    echo "Input: " . "$goodTest3Input" . ", Expected Output: " . "$goodTest3ExpOutput" . ", Actual Output: " . "$goodTest3actualOutput <br>";
    assert ($goodTest3actualOutput === $goodTest3ExpOutput, '<br> No, Test Failed: Function not returning the correct ouput');
    echo "Yes, good input test 3 passed! <br>";

    echo "<br> Bad Input Tests: <br>"; 


    //Bad Input Tests
    echo "<br> Test 4 <br>";
    $badTest1Input = -5;
    $badTest1ExpOutput = null; 
    $badTest1actualOutput = is_perfect_num($badTest1Input);
    if($badTest1ExpOutput == (string) null){ 
        $badTest1StrExpOutput = "null";
    }
    else if($badTest1ExpOutput == (int) False){
        $badTest1StrExpOutput = "False";
    }
    else{
        $badTest1StrExpOutput = "True";
    }
    echo "Is output from is_perfect_num($badTest1Input) equal to $badTest1StrExpOutput --> ";
    echo "Input: " . "$badTest1Input" . ", Expected Output: " . "$badTest1ExpOutput" . ", Actual Output: " . "$badTest1actualOutput <br>";
    assert ($badTest1actualOutput === $badTest1ExpOutput, '<br> No, Test Failed: Function not returning the correct ouput');
    echo "Yes, bad input test 1 passed! <br>";

    echo "<br> Test 5 <br>";
    $badTest2Input = 4.44;
    $badTest2ExpOutput = null;
    $badTest2actualOutput = is_perfect_num($badTest2Input);
    if($badTest2ExpOutput == (string) null){ 
        $badTest2StrExpOutput = "null";
    }
    else if($badTest2ExpOutput == (int) False){
        $badTest2StrExpOutput = "False";
    }
    else{
        $badTest2StrExpOutput = "True";
    }
    echo "Is output from is_perfect_num($badTest2Input) equal to $badTest2StrExpOutput --> ";
    echo "Input: " . "$badTest2Input" . ", Expected Output: " . "$badTest2ExpOutput" . ", Actual Output: " . "$badTest2actualOutput <br>";
    assert ($badTest2actualOutput === $badTest2ExpOutput, '<br> No, Test Failed: Function not returning the correct ouput');
    echo "Yes, bad input test 2 passed! <br>";

    echo "<br> Test 6 <br>";
    $badTest3Input = -123.456;
    $badTest3ExpOutput = null;
    $badTest3actualOutput = is_perfect_num($badTest3Input);
    if($badTest3ExpOutput == (string) null){ 
        $badTest3StrExpOutput = "null";
    }
    else if($badTest3ExpOutput == (int) False){
        $badTest3StrExpOutput = "False";
    }
    else{
        $badTest3StrExpOutput = "True";
    }
    echo "Is output from is_perfect_num($badTest3Input) equal to $badTest3StrExpOutput --> ";
    echo "Input: " . "$badTest3Input" . ", Expected Output: " . "$badTest3ExpOutput" . ", Actual Output: " . "$badTest3actualOutput <br>";
    assert ($badTest3actualOutput === $badTest3ExpOutput, '<br> No, Test Failed: Function not returning the correct ouput');
    echo "Yes, bad input test 3 passed! <br>";

    echo '<br> Ugly Input Tests: <br>';


    //Ugly Input Tests
    echo "<br> Test 7 <br>";
    $uglyTest1Input = 'Hello my name is Sanjana';
    $uglyTest1ExpOutput = null;
    $uglyTest1ActualOutput = is_perfect_num($uglyTest1Input);
    if($uglyTest1ExpOutput == (string) null){ 
        $uglyTest1StrExpOutput = "null";
    }
    else if($uglyTest1ExpOutput == (int) False){
        $uglyTest1StrExpOutput = "False";
    }
    else{
        $uglyTest1StrExpOutput = "True";
    }
    echo "Is output from is_perfect_num($uglyTest1Input) equal to $uglyTest1StrExpOutput --> ";
    echo "Input: " . "$uglyTest1Input" . ", Expected Output: " . "$uglyTest1ExpOutput" . ", Actual Output: " . "$uglyTest1ActualOutput <br>";
    assert ($uglyTest1ActualOutput === $uglyTest1ExpOutput, '<br> No, Test Failed: Function not returning the correct ouput');
    echo "Yes, ugly input test 1 passed! <br>";

    echo "<br> Test 8 <br>";
    $uglyTest2Input = True;
    $uglyTest2ExpOutput = null;
    $uglyTest2ActualOutput = is_perfect_num($uglyTest2Input);
    if($uglyTest2ExpOutput == (string) null){ 
        $uglyTest2StrExpOutput = "null";
    }
    else if($uglyTest2ExpOutput == (int) False){
        $uglyTest2StrExpOutput = "False";
    }
    else{
        $uglyTest2StrExpOutput = "True";
    }
    echo "Is output from is_perfect_num($uglyTest2Input (boolean)) equal to $uglyTest2StrExpOutput --> ";
    echo "Input: " . "$uglyTest2Input (boolean)" . ", Expected Output: " . "$uglyTest2ExpOutput" . ", Actual Output: " . "$uglyTest2ActualOutput <br>";
    assert ($uglyTest2ActualOutput === $uglyTest2ExpOutput, '<br> No, Test Failed: Function not returning the correct ouput');
    echo "Yes, ugly input test 2 passed! <br>";

    echo "<br> Test 9 <br>";
    $uglyTest3Input = null;
    $uglyTest3ExpOutput = null;
    $uglyTest3ActualOutput = is_perfect_num($uglyTest3Input);
    if($uglyTest3ExpOutput == (string) null){ 
        $uglyTest3StrExpOutput = "null";
    }
    else if($uglyTest3ExpOutput == (int) False){
        $uglyTest3StrExpOutput = "False";
    }
    else{
        $uglyTest3StrExpOutput = "True";
    }
    echo "Is output from is_perfect_num($uglyTest3Input (null)) equal to $uglyTest3StrExpOutput --> ";
    echo "Input: " . "$uglyTest3Input (null)" . ", Expected Output: " . "$uglyTest3ExpOutput" . ", Actual Output: " . "$uglyTest3ActualOutput <br>";
    assert ($uglyTest3ActualOutput === $uglyTest3ExpOutput, '<br> No, Test Failed: Function not returning the correct ouput');
    echo "Yes, ugly input test 3 passed! <br>"; 
   
}

function main(){
    echo "Calling the function is_perfect_num on its own: <br>";
    is_perfect_num(28); //inputting random inputs
    is_perfect_num(30);
    is_perfect_num(-44);

    echo "<br> <br> <br>";

    echo "Testing is_perfect_num() with perfectNumberTester() function: <br>";
    perfectNumberTester();
}
main();

?>