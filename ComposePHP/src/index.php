<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL Docker App</title>
</head>
<body>
    <h1>PHP MySQL Docker App</h1>
    <?php
    $host = 'mysql';
    $user = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    $database = 'db1';

    $connection = new mysqli($host, $user, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    echo "<p>Connected successfully to MySQL.</p>";

    $connection->close();
    ?>
</body>
</html>
