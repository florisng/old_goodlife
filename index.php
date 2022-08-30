<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/icon.ico">
    <title>Goodlife Health & Beatuty</title>
    <style>
        body {
            background-color: #692d91;
            color: #fff;
        }
        img {
            width: 50%;
        }
        .center_text {
            margin-top: 50px;
            text-align: center;
        }
        input {
            padding: 10px;
            border-radius: 10px;
            border: #fff solid 5px;
            font-size: 20px;
            color: #692d91;
            transition: 1s;
        }
        input[type="password"] {
            width: 40%;
        }
        input[type="submit"]:hover {
            background-color: #692d91;
            color: #fff;
            cursor: pointer;
        }
        .wrong {
            background-color: #fff;
            color: red;
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="center_text">
        <img src="./web/img/second_logo.jpg" alt="">
        <form action="" method="post">
            <input type="password" name="pass" placeholder="Passcode" required>
            <p>
                <input type="submit" name="login" value="Go">
            </p>
        </form>
        <?php
            if(isset($_POST["login"])) {
                if($_POST["pass"] == "123abc") {
                    session_start();
                    $_SESSION["bravogoodlife"] = true;
                    header('Location: ./web');
                } else {
                    echo "<div class='wrong'>";
                        echo "Wrong passcode";
                    echo "</div>";
                }
            }
        ?>
    </div>
</body>
</html>