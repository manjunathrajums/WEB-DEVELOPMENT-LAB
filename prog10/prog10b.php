<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime</title>
</head>
<body>
    <form method="POST">
        <label for="num">NUMBER</label>
        <input type="number" name="num">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num=$_POST["num"];
            if ($num==1 || $num==0){
                echo"$num is neither prime nor not prime";
                return;
            }
            $flag=0;
            for($i=2;$i<=sqrt($num);$i++){
                if($num%$i==0){
                    $flag=1;
                    break;
                }
            }
            if($flag==1){
                echo "$num is not prime";
            }
            else{
                echo "$num is prime";
            }
        }
        ?>
</body>
</html>