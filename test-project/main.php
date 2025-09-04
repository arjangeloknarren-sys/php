<?php
// Startwaarde instellen in PHP
$start = 100;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Aftellen van 100 naar 0</title>
    <script>
        window.onload = function() {
            let i = <?php echo $start; ?>; // Startwaarde uit PHP
            let output = document.getElementById("countdown");

            let interval = setInterval(function() {
                output.innerHTML = i; // Toon huidige waarde
                i--;

                if (i < 0) {
                    clearInterval(interval); // Stop wanneer 0 bereikt is
                }
            }, 1000); // 1000 ms = 1 seconde
        }
    </script>
</head>
<body>
    <h1>Aftellen van 100 naar 0</h1>
    <div id="countdown" style="font-size:2em; font-weight:bold;"></div>
</body>
</html>
