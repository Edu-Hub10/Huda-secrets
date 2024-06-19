<!DOCTYPE html>
<html>
<head>
    <title>View Registered Users</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #333;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        h2 {
            text-align: center;
        }
        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registered Users</h2>
        <pre>
        <?php
        if (file_exists("users.txt")) {
            $file = fopen("users.txt", "r");
            while(!feof($file)) {
                echo fgets($file) . "<br>";
            }
            fclose($file);
        } else {
            echo "No registered users found.";
        }
        ?>
        </pre>
    </div>
</body>
</html>
