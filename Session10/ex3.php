<?php
    $sal = $_GET['sal'];
    echo "Salary before bonus : $";
    echo $sal;
    echo "<br>";
    if ($sal > 850)
    {
        $bones = $sal * .1;
        echo "Bonus : $$bones";
        echo "<br>";
        $sal = $sal + $bones;
        echo "Total Salary : $$sal";
    }
?>