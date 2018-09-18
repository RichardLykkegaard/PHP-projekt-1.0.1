<?php
//Lower/Greater Than
$number = 2;

$upper = 1000;

$lower = 10;
$message = 'Number must be higher than '.$lower.' and lower than '.$upper;
//Can be
$canbe1 = 2;

$canbe2 = 4;
$canbemessage = 'It is okay';
$cannotbemessage = 'It is NOT okay';
if($number>$lower && $lower<$upper)
{
    echo 'okay';
}
else
{
echo $message;
}

?>

<html>

<div class="container">
    <div class="col-lg-13">
        <div class="row">
                <h3>Can be: Vid 22</h3>
            <?php
            //if-else statement that checks if number can be either canbe1 or canbe2
            if(($number == $canbe1)  ||! ($number==$canbe2))
            {
                echo $canbemessage;
            }
            else
            {
                echo $cannotbemessage;
            }


            ?>

        </div>
        <div class="row">
        <h3>Trible Equals: Vid 24</h3>
            <?php
         //Trible Equals Video 24
            $num1 = '1';
            $num2 = 1;

        if($num1==$num2)
        {
            echo 'Equal';
        }
        else
        {
            echo 'Not equal.';
        }

        ?>
        <div class="row">
        <h3>While Loop: Vid 25</h3>
        <?php
            //counter
            $counter = 1;
            while ($counter<=10)
            {
                echo 'while loop test excuted 10 times <br>';
                $counter++;
            }
        
        ?>
        </div>
        </div>
        <div class="row">
        <h3>Do While Loop: Vid 26</h3>
        <?php
        //counter
            $doCounter = 1;
            
            do 
            {
            echo 'this will show the amount of times set in "while" <br>';
            $doCounter++;
            }
            while($doCounter<=10)
        ?>
        </div>
        <div class="row">
        <h3>For Loop: Vid 27</h3>
        <?php
        //This for-loop will count from 1-10 and then stop
        for($count =1; $count<=10; $count++)
        {
        echo $count.'<br>';
        }
        ?>
        </div>
        <div class="row">
        <h3>Switch Statement: Vid 28</h3>
        <?php
        //The switch statement will convert an int into a string depending on the case
        //Variables
            $switchNum = 2;
            $day = 'Monday';
            switch($switchNum)
            {
                case 1:
                    echo 'one';
                break;
                case 2:
                    echo 'two';
                break;
                case 3:
                    echo 'three';
                break;
                //If there is no case to handle the input do this
                default:
                    echo 'Number not found.';
            }
            echo '<br>';
            switch($day)
            {
            case 'Saturday';
            case 'Sunday';
                    echo 'it\'s a weekend';
            break;
            
                default:
                    echo 'Not a weekend';
            }
        ?>
        </div>
        <div class="row">
        <h3>die and exit functions: Vid 29</h3>
        <?php
            //Tries to make a connection with the PDO-database. If not succesful use "or die" to kill the session
            $dbh = new PDO('mysql:host=localhost;dbname=test') or die ('Could not connect to database.');
            echo 'connected!';

        ?>
        </div>
        <div class="row">
        <h3>Basic Functions: Vid 30</h3>
        <?php
            //uses a function called myName to store a string containing a name to print out
            function myName()
            {
                echo 'Richard';
            }
            echo 'My name is<br>';
            myName();
        ?>
        </div>
        <div class="row">
        <h3>Functions with Arguments: Vid 31</h3>
        <?php
            //A function called "add" adds two number to gether - a function that takes in an argument and calculates
            //variables
            $ifuncNum1 = 10;
            $ifuncNum2 = 50;
            function add($funcNum1, $funcNum2)
            {
                
              echo $funcNum1+$funcNum2;
            }
            add($ifuncNum1, $ifuncNum2);
        ?>
        </div>
        <div class="row">
        <h3>Functions with a Return Value: Vid 32</h3>
        <?php
            //A function that adds two numbers together and then returns the result. NOTICE that you need to echo the function for it to be displayed on the screen, otherwise the 'return' statement will store the result instead of printing it.
           function addReturn($returnNumber1, $returnNumber2)
            {
               $returnResult = $returnNumber1 + $returnNumber2;
               return $returnResult;
            }
            //Result will be 20100 because if first calculates 10+10, returns 20 and then adds 100 to the result. 
            echo add(10, 10) + 100;
            function divideReturn($returnNumber1, $returnNumber2)
            {
                $returnResult = $returnNumber1 / $returnNumber2;
                return $returnResult;
            }
            echo '<br>';
            $sum = divideReturn(add(10, 10), addReturn(5, 5));
            echo $sum;
        ?>
        </div>
        <div class="row">
        <h3>Global Variables and Functions: Vid 33</h3>
        <?php
        //Global Variables and Functions
        $user_ip = $_SERVER['REMOTE_ADDR'];
        
        //global variable
        function echo_ip() 
        {
            global $user_ip;
            $string = 'Your IP adress is:'.$user_ip;
            echo $string;
        } 
            echo_ip();
        ?>
        </div>
        <div class="row">
        <h3>String Functions 1: Vid 34</h3>
        <?php
        //variables
        //A string function that counts the words in a string and prints them out in an array.
        $string = 'This is an example string.';
        $string_word_count = str_word_count($string, 1);
        
        print_r ($string_word_count);
        ?>
        </div>
        <div class="row">
        <h3>String Functions 2: Vid 35</h3>
        <?php
        //shuffles the letters,numbers and symbols in a string variable into something random generated
        $string = 'This is an example string.';
        $string_shuffled = str_shuffle($string);
        //$half = print only half the characters of the shuffled string
        $half = substr($string_shuffled, 0, 10);
        echo $half;
        ?>
        </div>
        <div class="row">
        <h3>String Functions 3: Vid 36</h3>
        <?php
        //similar_text compared two string to eachother and prints out how many % of the two strings that are identical.
         $string_one = 'This is a really nice and awesome text. Just fucking look at it';
         $string_two = 'This is a really nice and awesome text. Too bad I cant read.';

        similar_text($string_one, $string_two, $result);
        echo 'The similarity between is, '.$result;
         
        ?>
        </div>
        <div class="row">
        <h3>String Functions 4: Vid 37</h3>
        <?php
        $string = 'This is yet another really nice and awesome string-example';
        
        ?>
        </div>
        <div class="row">
        <h3>Introduction to Array: Vid 38</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>Associative Arrays: Vid 39</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>Multi-dimensional Arrays: Vid 40</h3>
        <?php
            
        ?>
        </div>
    </div>
</div>


</html>
