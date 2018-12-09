<?php include('jobs.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- GOOGLE FONTS -->
     <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC" rel="stylesheet">   

     <!-- CSS link -->
     <link rel="stylesheet" type="text/css" href="style.css">

     <!-- JSCRIPT/JQUERY -->
     <script src="https://code.jquery.com/jquery-3.1.1.min.js"    type="text/javascript"></script>
     <script src="" type="text/javascript"></script>

     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title>HireMe</title>

</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <h1>HireMe</h1>
    </header>
    
    <section>
        <!-- NAVBAR -->
        <nav class="nav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <i class="fas fa-home icon"></i>
                    <a href="#">Home</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-user-plus icon"></i>
                    <a href="#">Add User</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-edit icon"></i>
                    <a href="#">New Job</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-power-off icon"></i>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- MAIN CONTENT -->
        <div class="main">
            <div class="container">
                <h1>New User</h1>

                <form action = "<?= $_SERVER['PHP_SELF']; ?>" class="add-user-form" method = "POST">
                    <div class="form-field">
                        <label for="fname"> Firstname</label>
                        <input type="text" name="firstname" id="firstname" value = <?=$firstname ?>>
                        <span class = "error"> <?= $fname_error ?></span>
                    </div>
                    <div class="form-field">
                        <label for="lname"> Lastname </label>
                        <input type="text" name="lastname" id="lastname" value = <?=$lastname ?>>
                        <span class = "error"> <?= $lname_error ?></span>
                    </div>
                    <div class="form-field">
                        <label for="password"> Password </label>
                        <input type="password" name="password" id="password" value = <?=$password ?> >
                        <span class = "error"> <?= $password_error ?></span>
                    </div>
                    <div class="form-field">
                        <label for="password"> Confirm Password </label>
                        <input type="password" name="password1" id="password1" value = <?=$password1 ?>>
                        <span class = "error"> <?= $password1_error ?></span>
                    </div>
                    <div class="form-field">
                        <label for="email"> Email </label>
                        <input type="text" name="email" id="email" placeholder="eg. example@gmail.com" value = <?=$email ?>>
                        <span class = "error"> <?= $email_error ?></span>
                    </div>
                    <div class="form-field">
                        <label for="phone"> Telephone </label>
                        <input type="text" name="telephone" id="phone" placeholder="eg. 876-875-3883" value = <?=$telephone ?>>
                        <span class = "error"> <?= $tel_error ?></span>
                    </div>

                    <!--<a href="#" type="submit" class="submit-btn btn">Submit</a>-->
                    <button name = "submit" type="submit" class="submit-btn btn">Submit</button> 
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>