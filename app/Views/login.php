<!-- ?1422585377 -->
<!DOCTYPE html>
<html>
    <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="<?php echo base_url('ecommerce/public/bootstrap/css/bootstrap.css')?>" type="text/css">  
    <link rel="stylesheet" href="<?php echo base_url('ecommerce/public/css/login.css')?>" type="text/css">   
     
</head>
    <body>
        <h3>LOGIN</h3>
        <div class="container">
            <div class="form-box">

                <form class="input-group" action="" method="POST">

                    <input type="text" class="input-field" placeholder="Email" required name="email">
                    <input type="password" class="input-field" placeholder="Password" required name="password">
                    <button type="submit" class="login-btn" name="login">Login</button>



                </form>
            </div>
        </div>
        <?php if (isset($validation)): ?>
                        <div class="col-13">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors()?>
                    </div>
                    </div>
                    <?php endif; ?>



    </body>
</html>