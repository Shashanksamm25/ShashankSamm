<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <style>
        * {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.hero{
    width: 100%;
}
.row{
    width: 90%;
    height: 100vh;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.col{
    flex-basis: 45%;
}
.slider{
    height: 80vh;
    display: flex;
}
.product img{
    height: 19vh;
    margin-bottom: 9px;
    cursor: pointer;
    opacity: 0.6;
}

.product img:hover{
    opacity: 1;
}


.preview img{
    padding-top: 130px;
    padding-left: 30px;
    height: 80%;
}
p{
    margin-bottom: 12px;
}
.brand{
    background: #008000;
    width: fit-content;
    color: #fff;
    font-size: 12px;
    padding: 2px 5px;
}

h2{
    font-size: 45px;
    color: #555;
    margin-bottom: 20px;
}
.rating{
    display: flex;
    height: 15px;
}
.rating .fa{
    color: #008000;
}
.price{
    color: #fe980f;
    font-size: 26px;
    font-weight: bold;
    padding-top: 10px;
}
input{
    width: 30px;
    border: 1px solid #ccc;
    font-weight: bold;
    text-align: center;
}
button{
    color: #fff;
    font-size: 15px;
    outline: none;
    border: 0;
    border-radius: 5px;
    background: #fe980f;
    padding: 10px 15px;
    box-sizing: border-box;
    cursor: pointer;
}
button .fa{
    margin-right: 10px;
}
.related{
    width: 90%;
    margin: 0 auto 40px;
}
.related .row{
    width: 100%;
    height: auto;
}
.columns{
    flex-basis: 22%;
    height: 100%;
}
.items img{
    width: 100%;
}
.details{
    margin-top: 20px;
}
.details p{
    font-size: 14px;
    margin-bottom: 10px;
}
.details .rating{
    margin: 10px 0;
}


    </style>
   

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="/index.html" class="logo"> <span>CAR</span>Z </a>

    <nav class="navbar">
        <a href="/index.html">HOME</a>
        <a href="#vehicles">CARS</a>
        <a href="#services">SERVICES</a>
        <a href="/carrental.html">RENT</a>
        
        <a href="#contact">CONTACT</a>
    </nav>

    <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

</header> 

<br><br><br><br><br><br><br>
<div class="hero">
        <div class="row">
            <div class="col">

                <div class="slider">
                    
                    <div class="preview">
                        <img src="/cars website/image/vehicle-6.png"  alt="">
                        <h3>Car Details:-</Details></h3><br>
                        <p class="brand">Price:5700000</p>
                        <p class="brand">Brand:Porsche (Automatic)</p>
                    <p class="brand">Fuel Type: petrol</p>
                    <p class="brand">KM Run: 16000</p>
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="content">
                    <p class="brand">Porsche Cayenne</p>
                    <h2>Porsche Cayennes</h2>
                    <h3>Pre-Owner Details:-</Details></h3><br><br>
                    <p class="brand">Pre-Owner: Shashank MS</p>
                    <p class="brand">Phone NO: 7204761476</p>
                    <p class="brand">Email: Shashanksamm25@gmail.com</p>
                    <p class="brand">Place: Mysore</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p class="price">Porsche</p>
                    
                    <button type="button">
                       
                        Buy Now</button>
                </div>

            </div>
        </div>


        



    </div>



    <script>
        function clickme(smallImg) {

            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src;

        }

    </script>





<section class="footer" id="footer">

    <div class="box-container">

        

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> hellofreewebsitecode@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> City - Country - 000000 </a>
        </div>

        

    </div>

    <div class="credit"> Dream CARZ | CO LIMITED @2024</div>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>



</body>
</html>