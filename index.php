<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP WEB</title>
</head>
<body>
    <?php

    $hostname = "sql109.byethost4.com";
    $username = "b4_35976272";
    $password = "Sc:RJ3;MCje_!tP";
    $database = "b4_35976272_main";
    $conn = mysqli_connect($hostname, $username, $password, $database);

    if(!$conn) {
        echo "<h3>Database connection not established.</h3>";
    }

    $last = "SELECT * FROM  table001 ORDER BY id DESC LIMIT 1";
    $last_query = mysqli_query($conn, $last);

    if(!$last_query)  {
        echo "<h3>Query not executed.</h3>";
    }

    $data = mysqli_fetch_assoc($last_query);
    echo "<p style='font-size: 128px'>", $data["text"], "</p>";

    if(isset($_GET['text'])) {
        $text = $_REQUEST['text'];
        $sql = "INSERT INTO table001(text) VALUE($text)";
        mysqli_query($conn, $sql);
    }
?>
</body>
</html>