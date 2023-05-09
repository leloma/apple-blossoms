
<!DOCTYPE html>
<html>
    <head>
    <title>Register Page</title>
    <link rel="stylesheet" href="<?php echo base_url('ecommerce/public/bootstrap/css/bootstrap.css')?>" type="text/css">  
    <link rel="stylesheet" href="<?php echo base_url('ecommerce/public/css/register.css')?>" type="text/css">        
</head>
    <body>
    <h3>REGISTRATION</h3>

        <div class="container">
            <div class="form-box">

            
                <form class="input-group" method="post" action="">
                    <input type="text" name="first_name" class="input-field" placeholder="First Name" required>
                    <input type="text" name="last_name" class="input-field" placeholder="Last Name" required>
                    <input type="text" name="email" class="input-field" placeholder="Email" required>
                    <input type="text" name="gender" class="input-field" placeholder="Gender" required>
                    <input type="password" name="password" class="input-field" placeholder="Password" required>
                        

                    <button type="submit" class="register-btn">Register</button>


                </form>

            </div>
            <?php if (isset($validation)): ?>
                        <div class="col-13">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors()?>
                    </div>
                    </div>
                    <?php endif; ?>

        </div>


        


    </body>
</html>

