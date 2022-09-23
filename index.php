<?php
    // $page = 'page1';
    const PAGE = 'page1';
    require_once 'partials/header.php';
?>

<body>
    <?php require_once 'partials/nav.php'; ?>

    <h1>This is Page 1</h1>

    <?php

        $greetings = 'HELLO WORLD!';
        $age = 10;
        $result = false;

        $sum = $age + 1;

        echo 'HEY! That\'s very awesome!';
        echo "<br>";
        echo "The age is " . $age; // concatenation || join
        echo "<br>";
        echo 'The age is <b style="color: red">$age</b>.';
        echo "The age is <b style='color: red'>$age</b>.";

    ?>
</body>
</html>



