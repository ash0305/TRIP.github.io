<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;

}
    .container{
        max-width:80%;
        background-color:grey;
        margin:auto;
        padding:23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn PHP</h1>
        <p>Your party status is here:</p>
        <!-- This is a container -->
        <?php
        $age=7;
        if($age>18){
            echo "You can go to the party";
        }
        else if($age==7){
            echo"You are 7 years old";
        }
        else{
            echo"You cannot go to the party";
        }

        ?>

        <?php

        //Arrays:a collection of items in php
        //it can store more than one value at a time
        $languages = array("Python","C++","PHP","NodeJs");
        echo $languages[0]; 

        //Array methods:Count
        echo count($languages);

        //Iterating arrays  in PHP using while loop
        $a=0;
        while ($a<count($languages)) {
            # code...
            echo"<br>";
            echo"<br>The value of language is:";
            echo $languages[$a];
            $a++;
        }

       
        // PHP using while loop
        $a=0;
        while ($a<=10) {
            # code...
            echo"<br>";
            echo"<br>The value of a is:";
            echo $a; 
            $a++;
        }

          //Iterating arrays  in PHP using do while loop
          $a=0;
          do{
              # code...
              echo"<br>";
              echo"<br>The value of language is:";
              echo $languages[$a];
              $a++;
          }while($a<count($languages)) ;

           //Do while loop
           $a=0;
           do{
               # code...
               echo"<br>";
               echo"<br>The value of a is:";
               echo $a;
               $a++;
           }while($a<10) ;

           //For loop
           $a=200;
           for ($a=0; $a<10 ; $a++){ 
            # code...
            echo"<br>The value of a is :";
            echo $a;
           }

           //foreach loop

           foreach ($languages as $value) {
            # code...
            echo "<br>The value is";
            echo $value;
           }
   


   
  













        ?>

    </div>
</body>
</html>