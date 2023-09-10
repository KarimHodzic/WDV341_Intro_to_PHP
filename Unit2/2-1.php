<?php

    $yourName = 'Karim Hodzic';

    $number1 = 3.99;

    $number2 = 1.99;

    $total = $number1 + $number2;

    $codingLanguages = array('PHP', 'HTML', 'JavaScript')

?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>2-1: PHP Basics</title>
</head>
<script text='text/javascript'>
    <?php

        echo "let codingLanguages = [];\n";

        foreach ($codingLanguages as $variable){
            echo "codingLanguages.push('$variable');\n";
        };

    ?>

    console.log(codingLanguages);

    function onPageLoad(){

        let outputLocation = document.querySelector("#loopOutput");

        console.log(outputLocation);

        for(x = 0; x < codingLanguages.length; x++){
            let newElement = document.createElement("h3");
            let newText = document.createTextNode(codingLanguages[x]);
            newElement.appendChild(newText);
            outputLocation.appendChild(newElement);
        }


    };

</script>
<body onload="onPageLoad()";>

    <?php 
    
        echo '<h1>2-1: PHP Basics</h1>';
    
    ?>

    <h2><?php echo $yourName; ?></h2>
    
    <?php 
    
        echo "<h3>Single Cheese Burger $$number1.</h3>";
        echo "<h3>Small Fry $$number2.</h3>";
        echo "<h3>Comes to a total of $$total.</h3>"
    
    ?>

    <div id='loopOutput'></div>


</body>
</html>