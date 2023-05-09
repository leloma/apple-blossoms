
<!DOCTYPE html>
<html>
    <head>
    <title>Register Page</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">  
    <link rel="stylesheet" href="../css/register.css" >        
</head>
    <body>
    <h3>REGISTRATION</h3>

        <div class="container">
            <div class="form-box">

            
                <form class="input-group" method="post" action="process_register.php">
                    <input type="text" name="first_name" class="input-field" placeholder="First Name" required>
                    <input type="text" name="last_name" class="input-field" placeholder="Last Name" required>
                    <input type="text" name="email" class="input-field" placeholder="Email" required>
                    <input type="text" name="gender" class="input-field" placeholder="Gender" required>
                    <input type="password" name="password" class="input-field" placeholder="Password" required>
                        

                    <button type="submit" class="register-btn">Register</button>


                </form>

            </div>
            

        </div>


        


    </body>
</html>

