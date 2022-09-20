<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="log in style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="logo">
            <div class="image">
                <img src="hulk.png" alt="notfound">
            </div>
        </div>
        <br>

        <div class="form">
            <form method="post">
                <label for="User">User</label>
                <select id="User" name="User" required >
                    <option value='Admin'>Admin</option>
                    <option value='Coach'>Coach</option>
                    <option value='Trainee'>Trainee</option>
                </select>
                <br>
                <br>
                <input type="text" placeholder="User Name" id="name" name="name" required>
                <br>
                <br>
                <input type="text" placeholder="Password" id="Password" name="Password" required>
                <br>
                <br>
                <input class="button" type="submit" value="Log in">
            </form>
        </div>
    </div>
</body>

</html>