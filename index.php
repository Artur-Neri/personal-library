<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body style="display: grid;place-items: center; height: 100vh; margin: 0; font-family:sans-serif;">
    

    <?php 

        $name = "Dark Matter";
        $read = false;

    ?>

    <h1>
        <?php
            if ($read) {
                echo "You have read $name";
            } else {
                echo "You have not read anything";
            }
            
        ?>
    </h1>

</body>
</html>