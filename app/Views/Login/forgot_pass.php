<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,300&family=Montserrat:wght@100&display=swap"
        rel="stylesheet">

    <!-- MY CSS -->
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="/assets/img/favicon.png">

    <title>Caliana</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
</style>

<body>
    <div class="wrap-left">
        <div class="con">
            <div class="content-slide">
                <div class="imgslide efek">
                    <div class="numberslide1"></div>
                    <img src="assets/img/foto_login.png" alt="">
                    <div class="judul">
                        Caliana Employee
                    </div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
                <div class="imgslide efek">
                    <div class=" numberslide1"> </div>
                    <img src="assets/img/profil1.jpg" alt="">
                    <div class="judul">
                        Caliana Employee
                    </div>
                    <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quis
                        amet, ad, laboriosam illo provident velit, cupiditate</div>
                </div>
                <div class="imgslide efek">
                    <div class=" numberslide1"> </div>
                    <img src="assets/img/profil3.jpg" alt="">
                    <div class="judul">
                        Caliana Employee
                    </div>
                    <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quis
                        amet, ad, laboriosam illo provident velit, cupiditate</div>
                </div>
            </div>
            <div class="page">
                <span class="dot" onClick="dotslide(1)"></span>
                <span class="dot" onClick="dotslide(2)"></span>
                <span class="dot" onClick="dotslide(3)"></span>
            </div>

        </div>
    </div>
    <div class="wrap-right">
        <div class="logo">
            <img src="assets/img/logo caliana color 1.png" alt="">
        </div>
        <div class="login-wrap">
            <h3>Lupa Password</h3>
            <form action="/login" method="POST">
                <div class="form-group">
                    <label class="email" id="email-lbl" for="email">Email</label><br>
                    <input type="text" name="email" id="email" placeholder="Masukan Email Anda" required><br>
                </div>
                <div class="flex text-end">
                    <a href="/" class="lupa">Masuk ke akun yang sudah ada</a>
                </div>
                <a href="#" class="lupa-pass btn-masuk" id="btn-masuk" type="submit">Lupa Password</a>
            </form>
        </div>
    </div>
    <script>
    var slideIndex = 1;
    showSlide(slideIndex);

    function nextslide(n) {
        showSlide(slideIndex += n);
    }

    function dotslide(n) {
        showSlide(slideIndex = n);
    }

    function showSlide(n) {
        var i;
        var slides = document.getElementsByClassName("imgslide");
        var dot = document.getElementsByClassName("dot");

        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {

            slides[i].style.display = "none";
        }

        for (i = 0; i < slides.length; i++) {

            dot[i].className = dot[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].style.display = "block";

        dot[slideIndex - 1].className += " active";



    }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->

    <!-- <script>
        var slideIndex = 1;
        showSlide(slideIndex);

        function nextslide(n) {
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var i;
            var slide = document.getElementsByClassName("imgslide");

            if (n > slide.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slide.length;
            }

            for (i = 0; i < slide.length; i++) {
                slide[i].style.display = "none";
            }

            slide[slideIndex - 1].style.display = "block";
        }
    </script> -->
</body>

</html>