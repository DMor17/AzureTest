<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $myArray = array ("do", "re", "mi"); // declares and instantiates our array
    echo $myArray[0]; // outputs do
    $myArray[1] = "la"; // modifies position 1
    unset($myArray[2]); // removes the array in position 2
    ?>
</p>
</body>
</html>