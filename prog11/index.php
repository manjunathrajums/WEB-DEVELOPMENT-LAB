<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy</title>
</head>
<body>
    <form method="POST">
        <textarea cols="50" rows="50" name="data"></textarea>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $info = $_POST['data'];
            $file = 'file.txt';
            file_put_contents($file,$info,LOCK_EX);

            echo "<h3>THE DATA RECIEVED</h3>";
            echo "$info";
        }
    ?>
</body>
</html>