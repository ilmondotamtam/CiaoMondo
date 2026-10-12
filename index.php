<?php

// Testo generato dal codice PHP
$messaggio = "Ciao mondo in PHP!";

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($messaggio, ENT_QUOTES, 'UTF-8') ?></title>

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
        }

        .box {
            width: 50vw;
            height: 50vh;

            display: flex;
            justify-content: center;
            align-items: center;

            background-color: #0066cc;
            color: white;

            font-size: clamp(24px, 4vw, 52px);
            font-weight: bold;

            text-align: center;
            border-radius: 12px;

            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.20);
        }

        @media (max-width: 600px) {
            .box {
                width: 80vw;
                height: 50vh;
            }
        }
    </style>
</head>

<body>

    <div class="box">
        <?= htmlspecialchars($messaggio, ENT_QUOTES, 'UTF-8') ?>
    </div>

</body>
</html>