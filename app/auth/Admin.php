<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            margin-bottom: 15%;
        }

        main {
            margin: 20px;
        }

        .button-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .dashboard-button {
            padding: 10px;
            margin: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .dashboard-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Admin Dashboard</h1>
    </header>

    <main>
        <div class="button-container">
            <?php
            // Simulating dynamic content or data retrieved from a database
            $dynamicButtons = array(
                "ADD NEW USER" => "adduser.php",
                "STATISTICS" => "stat.php",
                "ADD KEYWORDS" => "addkeyword.php"
            );

            foreach ($dynamicButtons as $buttonText => $buttonLink) {
                echo '<button class="dashboard-button" onclick="location.href=\'' . $buttonLink . '\'">' . $buttonText . '</button>';
            }
            ?>
        </div>
    </main>
</body>

</html>
