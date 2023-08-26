<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============--> 
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>smartphone product page</title>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                 Smartio.
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#featured" class="nav__link">Featured</a>
                    </li>
                    <li class="nav__item">
                        <a href="#products" class="nav__link">Products</a>
                    </li>
                    <li class="nav__item">
                        <a href="#new" class="nav__link">New</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x' ></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class='bx bx-moon change-theme' id="theme-button"></i>

                <div class="nav__shop" id="cart-shop">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt' ></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== contact ====================-->
    <div class="cart" id="cart">
        <i class='bx bx-x cart__close' id="cart-close"></i>

        <h2 class="cart__title-center">Contact us</h2>

       
            
<form id="contact_form" name="contact_form" method="post"  autocomplete="off">
<div class="mb-5 row">
    <div class="col">
        <label>First Name</label>
        <input type="text" required maxlength="50" class="form-control" id="first_name" name="first_name" placeholder="enter first name">
    </div>
    <div class="col">
        <label>Last Name</label>
        <input type="text" required maxlength="50" class="form-control" id="last_name" name="last_name" placeholder="enter last name">
    </div>
</div>
<div class="mb-5 row">
    <div class="col">
        <label for="email_addr">Email address</label>
        <input type="email" required maxlength="50" class="form-control" id="email_addr" name="email"
            placeholder="name@example.com">
    </div>
    <div class="col">
        <label for="phone_input">Phone</label>
        <input type="tel" required maxlength="50" class="form-control" id="phone_input" name="Phone"
            placeholder="Phone">
    </div>
</div>
<div class="mb-5">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" name="message" rows="5" placeholder="enter message"></textarea>
</div>
<button type="submit" class="btn btn-primary px-4 btn-lg" name="submit">Post</button>
</form>
            
                  
            

            
     

       
    </div>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__img-bg">
                    <img src="assets/img/6.jfif" alt="" class="home__img">
                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        Facebook
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                        Twitter
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        Instagram
                    </a>
                </div>

                <div class="home__data">
                    <h1 class="home__title">NEW SMARTPHONE <br> COLLECTIONS </h1>
                    <p class="home__description">
                        Explore our range of smartphones that push the boundaries of what's possible. From stunning displays to AI-powered cameras, each device is a masterpiece of innovation
                    </p>
                    

                    <div class="home__btns">
                        <a href="#" class="button button--gray button--small">
                            Discover
                        </a>

                        <button class="button home__button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== FEATURED ====================-->
        <section class="featured section container" id="featured">
            <h2 class="section__title">
                Featured
            </h2>

            <div class="featured__container grid">
                <article class="featured__card">
                    <span class="featured__tag">Sale</span>

                    <img src="assets/img/2.jfif" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Redmi 5</h3>
                        <span class="featured__price">12500 Rs</span>
                    </div>

                    <button class="button featured__button">ADD TO CART</button>
                </article>

                <article class="featured__card">
                    <span class="featured__tag">Sale</span>

                    <img src="assets/img/3.jfif" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Realme 6</h3>
                        <span class="featured__price">10000 Rs</span>
                    </div>

                    <button class="button featured__button">ADD TO CART</button>
                </article>

                <article class="featured__card">
                    <span class="featured__tag">Sale</span>

                    <img src="assets/img/4.jfif" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">vivo</h3>
                        <span class="featured__price">9000 Rs</span>
                    </div>

                    <button class="button featured__button">ADD TO CART</button>
                </article>
            </div>
        </section>

        <!--==================== STORY ====================-->
        <section class="story section container">
            <div class="story__container grid">
                <div class="story__data">
                    <h2 class="section__title story__section-title">
                        Our Story
                    </h2>

                    <h1 class="story__title">
                        Inspirational Smartphone of <br> this year
                    </h1>

                    <p class=story__description" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        The latest and modern watches of this year, is available in various 
                        presentations in this store, discover them now.
                    </p>

                    <a href="#" class="button button--small">Discover</a>
                </div>

                <div class="story__images">
                    <img src="assets/img/14.jfif" alt="" class="story__img">
                   
                </div>
            </div>
        </section>

        <!--==================== PRODUCTS ====================-->
        <section class="products section container" id="products">
            <h2 class="section__title">
                Products
            </h2>

            <div class="products__container grid">
                <article class="products__card">
                    <img src="assets/img/6.jfif" alt="" class="products__img">

                    <h3 class="products__title">moto</h3>
                    <span class="products__price">15000 Rs</span>

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>

                <article class="products__card">
                    <img src="assets/img/7.jfif" alt="" class="products__img">

                    <h3 class="products__title">Redmi</h3>
                    <span class="products__price">13500 Rs</span>

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>

                <article class="products__card">
                    <img src="assets/img/2.jfif" alt="" class="products__img">

                    <h3 class="products__title">oppo</h3>
                    <span class="products__price">18000 Rs</span>

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>

                <article class="products__card">
                    <img src="assets/img/3.jfif" alt="" class="products__img">

                    <h3 class="products__title">Realme</h3>
                    <span class="products__price">16500 Rs</span>

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>

                <article class="products__card">
                    <img src="assets/img/4.jfif" alt="" class="products__img">

                    <h3 class="products__title">Vivo</h3>
                    <span class="products__price">9500 Rs</span>

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>
            </div>
        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section container">
            <div class="testimonial__container grid">

            
                
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left' ></i>
                            </div>
                            <p class="testimonial__description">
                                "I'm absolutely in love with my new mobile phone! The camera quality is stunning, and the battery life is impressive. It's sleek, fast, and has all the features I need for both work and play. I couldn't be happier with my purchase!"
                            </p>
                            <h3 class="testimonial__date">January 27. 2023</h3>
    
                            <div class="testimonial__perfil">
                                <img src="assets/img/testimonial1.jpg" alt="" class="testimonial__perfil-img">
    
                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Lee Doe</span>
                                    <span class="testimonial__perfil-detail">Astralia</span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left' ></i>
                            </div>
                            <p class="testimonial__description">
                                "As a photographer, camera quality is a top priority for me. This mobile phone exceeded my expectations. The photos I've taken with it rival those from my professional camera. It's become an indispensable tool for my creative work." 
                            </p>
                            <h3 class="testimonial__date">March 27. 2023</h3>
    
                            <div class="testimonial__perfil">
                                <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__perfil-img">
    
                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Samantha Mey</span>
                                    <span class="testimonial__perfil-detail">India</span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left' ></i>
                            </div>
                            <p class="testimonial__description">
                                They are the best smart phones that one acquires, also they are always with the latest 
                                news and trends, with a very comfortable price and especially with the attention 
                                you receive, they are always attentive to your questions.
                            </p>
                            <h3 class="testimonial__date">March 20. 2023</h3>
    
                            <div class="testimonial__perfil">
                                <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__perfil-img">
    
                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Raul Zaman</span>
                                    <span class="testimonial__perfil-detail">Netherlands</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-button-next">
                        <i class='bx bx-right-arrow-alt' ></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class='bx bx-left-arrow-alt' ></i>
                    </div>
                </div>
                <div class="testimonial__images">
                    <div class="testimonial__square"></div>
                    <img src="assets/img/9.jfif" alt="" class="testimonial__img">
                </div>
               
            </div>
        </section>

        <!--==================== NEW ====================-->
        <section class="new section container" id="new">
            <h2 class="section__title">
                New Arrivals
            </h2>
            
            <div class="new__container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>
    
                            <img src="assets/img/5.jfif" alt="" class="new__img">
    
                            <div class="new__data">
                                <h3 class="new__title">Realme narzo</h3>
                                <span class="new__price">20000 Rs</span>
                            </div>
    
                            <button class="button new__button">ADD TO CART</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>
    
                            <img src="assets/img/8.jfif" alt="" class="new__img">
    
                            <div class="new__data">
                                <h3 class="new__title">oppo</h3>
                                <span class="new__price">11500 Rs</span>
                            </div>
    
                            <button class="button new__button">ADD TO CART</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>
    
                            <img src="assets/img/9.jfif" alt="" class="new__img">
    
                            <div class="new__data">
                                <h3 class="new__title">Samsung</h3>
                                <span class="new__price">17000 Rs</span>
                            </div>
    
                            <button class="button new__button">ADD TO CART</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>
    
                            <img src="assets/img/10.jfif" alt="" class="new__img">
    
                            <div class="new__data">
                                <h3 class="new__title">one plus</h3>
                                <span class="new__price">25000 Rs</span>
                            </div>
    
                            <button class="button new__button">ADD TO CART</button>
                        </article>                       
                    </div>
                </div>
            </div>
        </section>

        <!--==================== NEWSLETTER ====================-->
        <section class="newsletter section container">
            <div class="newsletter__bg grid">
                <div>
                    <h2 class="newsletter__title">Subscribe Our <br> Newsletter</h2>
                    <p class="newsletter__description">
                        Don't miss out on your discounts. Subscribe to our email 
                        newsletter to get the best offers, discounts, coupons, 
                        gifts and much more.
                    </p>
                </div>

                <form action="" class="newsletter__subscribe">
                    <input type="email" placeholder="Enter your email" class="newsletter__input">
                    <button class="button">
                        SUBSCRIBE
                    </button>
                </form>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <h3 class="footer__title">Our information</h3>

                <ul class="footer__list">
                    <li>1234 - Hyderabad</li>
                    <li>Ameerpet</li>
                    <li>123-456-789</li>
                </ul>
            </div>
            <div class="footer__content">
                <h3 class="footer__title">About Us</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Support Center</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Customer Support</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Copy Right</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Product</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">costumes</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">watches</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Electric</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Accesories</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Social</h3>

                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-facebook'></i>
                    </a>

                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-twitter' ></i>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                </ul>
            </div>
        </div>

        <span class="footer__copy">&#169; Smartio. All rigths reserved</span>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>
</html>
<?php
include("connection.php");

if(isset($_POST['submit']))
{
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['Phone']; 
$message = $_POST['message'];


$query = "INSERT INTO form VALUES ('$fname','$lname','$email','$phone','$message')";
$data = mysqli_query($conn, $query);

if ($data) {
echo '<script>alert("Thank You")</script>';

} 
}
?>