<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>Login Page</h2>
        <form method="POST">
            <label for="username">Username: </label>
            <input name="username"><br><br>
            <label for="password">Password: </label>
            <input type="password" name="password"><br><br>
            <button>Login</button>
        </form>
        <?php 
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $uname = $_POST['username'];
                $pass  = $_POST['password'];

                $file = 'login.txt';
                $users = file($file);

                $login = false;
                foreach($users as $user){
                    list($usname,$passw) = explode(',',$user);
                    if($usname==$uname && $passw==$pass){
                        $login = true;
                    }
                }

                if($login){
                    echo "LOGIN SUCCESFUL! WELCOME $usname";
                }
                else{
                    echo "LOGIN UNSUCCESFUL! TRY AGAIN";
                }
            }
        ?>
    </body>
</html>