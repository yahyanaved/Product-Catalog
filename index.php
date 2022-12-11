<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Bootstrap Simple Login Form with Blue Background</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/signupform.css">
</head>

<body>
    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Signup as</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="signupbuyer.php">
                        <input type="submit" value="Buyer">
                    </form>
                    <form action="signupseller.php">
                        <input type="submit" value="Seller">
                    </form>
                    <div class="hint-text">Already have an account? <a href="loginpage.php">Login here</a></div>

                </div>
            </div>
        </div>
    </div>
    <p class="credit">Developed by <a href="http://www.designtheway.com" target="_blank">Design the way</a></p>
    <?php
    ?>
</body>

</html>