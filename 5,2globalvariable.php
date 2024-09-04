<?php

    $name = "vivek";
    function global_var()
    {
        global $name;
        echo "variable inside the function: ". $name;
        echo "</sbr>";
    }
    global_var();
    echo "Variable outside the function: ". $name;

?>

