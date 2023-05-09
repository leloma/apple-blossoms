<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apple Blossoms</title>
    <!-- <link rel="stylesheet" href="ecommerce/public/css/homepage.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url('ecommerce/public/bootstrap/css/bootstrap.css')?>" type="text/css">  
    <link rel="stylesheet" href="<?php echo base_url('ecommerce/public/css/homepage.css')?>" type="text/css">        
      
</head>
<body>


    <!-- Section for Heading, Motto, register, login etc -->
    <section class="section1">
            <div class="motto">
            </div>

            <div class="boutique-name .boutique-name-font">
                <h1>Apple Blossoms Boutique</h1>
            </div>
            <div class="clearfix"></div>

            <div class="login-register text-right">
                <h1>Welcome, <?= session()->get('first_name')?></h1>
            </div>
            <div class="clearfix"></div>

    </section>

    <!--!>Section for Breakfast, Lunch, Dinner,<!-->

    <section class="section2">
        <div class="categories text-center">
            <h2>CATEGORIES</h2>
            <h2>MEN</h2>

        </div>

        <div class="boxes cat-texts ">
            <h2>Formal</h2>
            <a href=""><img src="images/men_formal.jpg" alt="Men Formal" class="full-image image-size rounding"></a>

        </div>
        <div class="boxes cat-texts">
            <h2>Casual</h2>
            <a href=""><img src="images/men_casual.jpg" alt="Men Casual" class="full-image image-size rounding"></a>
        </div>
        <div class="boxes cat-texts">
            <h2>Sports</h2>
            <a href=""><img src="images/men_sports.jpg" alt="Men Sports" class="full-image image-size rounding"></a>
        </div>
        <br>

        <div class="clearfix"></div>


        <div class="categories text-center">
            <h2>WOMEN</h2>

        </div>

        <div class="boxes cat-texts ">
            <h2>Formal</h2>
            <a href=""><img src="images/women_formal.jpg" alt="Women Formal" class="full-image image-size rounding"></a>

        </div>
        <div class="boxes cat-texts">
            <h2>Casual</h2>
            <a href=""><img src="images/women_casual.jpg" alt="Women Casual" class="full-image image-size rounding"></a>
        </div>
        <div class="boxes cat-texts">
            <h2>Sports</h2>
            <a href=""><img src="images/women_sports.jpg" alt="Women Sports" class="full-image image-size rounding"></a>
        </div>
        <br>

        <div class="clearfix"></div>


        <div class="categories text-center">
            <h2>CHILDREN</h2>

        </div>

        <div class="boxes cat-texts ">
            <h2>Formal</h2>
            <a href=""><img src="images/children_formal.jpg" alt="Children Formal" class="full-image image-size rounding"></a>

        </div>
        <div class="boxes cat-texts">
            <h2>Casual</h2>
            <a href=""><img src="images/children_casual.jpg" alt="Children Casual" class="full-image image-size rounding"></a>
        </div>
        <div class="boxes cat-texts">
            <h2>Sports</h2>
            <a href=""><img src="images/children_sport.jpg" alt="Children Sports" class="full-image image-size rounding"></a>
        </div>
        <br>

        <div class="clearfix"></div>

        <div class="categories text-center">
            <h2>PETS</h2>

        </div>

        <div class="boxes cat-texts ">
            <h2>Dogs</h2>
            <a href=""><img src="images/dogs.jpg" alt="Dog Wear" class="full-image image-size rounding"></a>

        </div>
        <div class="boxes cat-texts">
            <h2>Cats</h2>
            <a href=""><img src="images/cats.jpg" alt="Cat Wear" class="full-image image-size rounding"></a>
        </div>
        <br>

        <div class="clearfix"></div>








    </section>

    <!--!>Section for Social Media and Contact info<!-->

    <section class="section3">
        <div class="social-media text-center">
            <ul>
            <li><a href="#"><img src="https://img.icons8.com/cute-clipart/64/000000/facebook.png"></a></li>
            <li><a href="#"><img src="https://img.icons8.com/color/64/000000/instagram-new--v2.png"/></a></li>
            <li><a href="#"><img src="https://img.icons8.com/fluency/48/000000/twitter.png"/></a></li>
        </ul>
        <ul>
            <li><strong>Contact us at 0703214599</strong></li>
        </ul>
        <ul>
            <li><strong>Yaya Center, Nairobi</strong></li>
        </ul>
        
        </div>

    </section>

    <!--!>Section about the author<!-->

        <section class="section4 text-center">
            <div class="rights">
                <h5>All rights reserved &#169;</h5>
                <h5>Made by <a href="#">Lelo Abera</a></h5>
            </div>

        </section>
        
    



</body>
</html>