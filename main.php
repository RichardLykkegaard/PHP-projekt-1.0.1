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
        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 29</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 30</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 31</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 32</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 33</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 34</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 35</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 36</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 37</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 38</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 39</h3>
        <?php

        ?>
        </div>
        <div class="row">
        <h3>While Loop: Vid 40</h3>
        <?php

        ?>
        </div>
    </div>
</div>


</html>
