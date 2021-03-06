<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Property Rental Managemnet System | Sign up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <h2 style="color: #4aba70">Sign up to creat new account </h2><br>
            <form method="POST" id="signup-form" class="signup-form">
                <h3>
                    <span class="title_text" style="color: #4aba70">Account Infomation</span>
                </h3>
                <fieldset>
                    <br><br>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" placeholder="User Name" />
                        </div>
                        
                        <div class="form-group">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" />
                        </div>

                         <div class="form-group">
                            <label for="c_pass" class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="confirm Password" />
                        </div>

                 


                       
                    </div>
                    <div class="fieldset-footer">
                        <span>Step 1 of 2</span>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text" style="color: #4aba70">Personal Information</span>
                </h3>
                <fieldset>

                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="full_name" id="name" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <label for="Number" class="form-label">Phone Number</label>
                            <input type="text" name="number" id="number" placeholder="+088" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" placeholder="example@email.com" />
                        </div>
    
                       
    
                       
                    </div>

                    <div class="fieldset-footer">
                        <span>Step 2 of 2</span>
                    </div>

                </fieldset>

            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="vendor/minimalist-picker/dobpicker.js"></script>
    <script src="vendor/jquery.pwstrength/jquery.pwstrength.js"></script>
    <script src="js1/main.js"></script>
</body>

</html>