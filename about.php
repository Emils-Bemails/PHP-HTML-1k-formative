<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo "<h1>About</h1>";
    echo "<ul>";
    echo "<li>";
    echo "<a href=index.html>Iet uz index </a>";
    echo "</li>";
    echo "<li>";
    echo "<a href=contact.html> Iet uz contact </a>";
    echo "</li>";
    echo "</ul>"; 


    $indexedArray = [
        "Lorem ipsum dolor sit amet.",
        "Lorem ipsum dolor sit amet, consectetur adipisicing.",
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto."
    ];

    foreach ($indexedArray as $array) {
        echo  "<p>". $array .  "</p>";
    };
    ?>

</body>
</html>