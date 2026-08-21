<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Red...</title>
    <script>
        (function () {
            // List your 5 target domains here
            const urls = [
                "https://www.mvn.in/",
                "https://www.sobha.com/",
                "https://godrejsnewprojects.com/",
                "https://unityone.in/",
                "https://www.propzilla.in/"
            ];

            // Pick a random number between 0 and 4
            const randomIndex = Math.floor(Math.random() * urls.length);
            
            // Select the target URL
            const target = urls[randomIndex];

            // Instant redirect with no browser history
            window.location.replace(target);
        })();
    </script>
</head>
<body>
</body>
</html>
