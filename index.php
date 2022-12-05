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
                <h2>Registration Form</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="signup.php" method="POST">
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="text" name="username" placeholder="Username" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Re-type Password" required />
                        </div>
                        <div class="row clearfix">
                            <div class="col_half">
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" name="name" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col_half">
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" name="name" placeholder="Last Name" required />
                                </div>
                            </div>
                        </div>
                        <div class="input_field radio_option">
                            <input type="radio" name="radiogroup1" id="rd1">
                            <label for="rd1">Male</label>
                            <input type="radio" name="radiogroup1" id="rd2">
                            <label for="rd2">Female</label>
                        </div>
                        <div class="input_field select_option">
                            <select>
                                <option>Select a country</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                            <div class="select_arrow"></div>
                        </div>


                        <input class="button" type="submit" value="Register" />
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