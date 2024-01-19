<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>About Us</h3>
    <p> <a href="home.php">Home</a> / About </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>Why Choose Us?</h3>
            <p>Welcome to Flower Store - Where Every Petal Tells a Story! 
            We believe in turning ordinary moments into extraordinary memories with the language of flowers.</p>
            <a href="shop.php" class="btn">Shop Now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>What We Provide?</h3>
            <p>Welcome to Flower Store - Your Floral Wonderland!
            We are dedicated to making your flower shopping experience delightful and memorable.</p>
            <a href="contact.php" class="btn">Contact Us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>Who We Are?</h3>
            <p>About Flower Store - Where Floral Dreams Come to Life!
            A floral oasis where passion meets petals. We are not just a flower store; we are storytellers, crafting moments of joy and beauty with every bloom. </p>
            <a href="#reviews" class="btn">Clients Reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">Client's Reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>"Flower Store exceeded my expectations! Beautiful flowers, easy ordering, and prompt delivery. Will definitely be my go-to for all floral needs. Highly recommended!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ranveer</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>"Impressed with Flower Store! The website is user-friendly, the bouquet was gorgeous, and the delivery was on point. Great service, and the flowers brought so much joy. Thanks!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Shradha</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>"Flower Store is my floral sanctuary! Gorgeous blooms, hassle-free ordering, and the smiles they bring are priceless. A floral haven I'll keep coming back to."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Shreeniwas</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>"Fantastic experience with Flower Store. The personalized touch in their arrangements sets them apart. Quick and secure checkout. I'm a happy customer, and so was the recipient!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Shruti</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>"Floral perfection delivered! Flower Store nailed it with stunning arrangements. The whole process was seamless, and the recipient was overjoyed. Five stars!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Swapnil</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>"Petals speak louder than words, and Flower Store speaks volumes! Elegant bouquets, reliable service, and a touch of magic. My new favorite flower destination!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sneha</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>