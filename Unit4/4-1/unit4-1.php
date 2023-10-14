<?php

    function formatTodaysDatemmddyyyy(){
        return date("n/j/Y");
    }

    function formatTodaysDateddmmyyyy(){
        return date("j/n/Y");
    }

    function stringOperators($inString){
        $stringLen = strlen($inString);
        echo '<div class="container"><div class="examples"><h3>This is the strings length.</h3>' . '<div>' . $stringLen . '</div> </div>';
        $trimmedInString = trim($inString);
        echo '<div class="examples"><h3>This is the string without white space.</h3><div>' . $trimmedInString . '</div> </div> </div>';
        $lowerString = strtolower($inString);
        echo '<div class="container"><div class="examples"><h3>This is the string in lower case.</h3>' . '<div>' . $lowerString . '</div> </div>';
        echo '<div class="examples"><h3>Checks for dmacc after putting the string to lower case.</h3><div>' . strpos($lowerString, "dmacc") . '</div> </div> </div>';
    }

    function formatPhoneNumber($inPhoneNumber){
        $usablePhoneNumber = "+0" . $inPhoneNumber;
        if(preg_match('/^\+[0-9]([0-9]{3})([0-9]{3})([0-9]{4})$/',  
        $usablePhoneNumber, $value)) {
            $format = $value[1] . '-' .  
        $value[2] . '-' . $value[3]; 
        } else {
            echo "Invalid phone number <br>";
        }
        echo "$format" . "<br>";
    }

    function formatUSCurrency($inUSDollarAmount){
        $usCurrencyOutput = number_format($inUSDollarAmount, 2);
        echo "$$usCurrencyOutput.";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Unit 4-1</title>
</head>
<body>

    <div class="content">
        <div>
            <h1>PHP Functions</h1>
        </div>
        <div class="container">
            <div class="examples">
                <h3>Date Formatted MM/DD/YYYY.</h3>
                <div><?php echo formatTodaysDatemmddyyyy(); ?></div>
            </div>
            <div class="examples">
                <h3>Date Formatted DD/MM/YYYY.</h3>
                <div><?php echo formatTodaysDateddmmyyyy(); ?></div>
            </div>
        </div>
        <?php stringOperators("   Is DMACC in this sentence?   ") ?>
        <div class="container">
            <div class="examples">
                <h3>Formats a number into a Phone number.</h3>
                <div><?php formatPhoneNumber(1234567890); ?></div>
            </div>
            <div class="examples">
                <h3>Formats a number into US currency.</h3>
                <div><?php formatUSCurrency(123456); ?></div>
            </div>
        </div>
    </div>


</body>
</html>