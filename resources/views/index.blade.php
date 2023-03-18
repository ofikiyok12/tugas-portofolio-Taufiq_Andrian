<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Taufiq Andrian</title>

    <!-- font  nya -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,600&display=swap"
      rel="stylesheet"
    />
    <!-- bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- bootstrap -->

    <!-- css -->
   
    <style>
              :root {
            --primary: #b6896b;
            --bg: black;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
        }

        body {
            font-family: "poppins", sans-serif;
            background-color: var(--bg);
            color: white;
        }

        html {
            scroll-behavior: smooth;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.4rem 7%;
            background-color: rgb(14, 10, 4);
            border-bottom: 1px solid #0e0a06;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
        }

        .navbar .navbar-logo {
            text-decoration-line: none;
            font-size: 2rem;
            font-weight: 700;
            color: white;
            font-style: italic;
        }

        .navbar .navbar-logo span {
            color: var(--primary);
            text-decoration-line: none;
        }

        .navbar-nav a {
            color: white;
            display: inline-block;
            font-size: 1.3rem;
            margin: 0.5rem;
            text-decoration-line: none;
        }

        .navbar-nav a:hover {
            color: var(--primary);
        }

        .navbar .navbar-nav a::after {
            content: "";
            display: block;
            padding-bottom: 0.5rem;
            transform: scaleX(0.5);
            transition: 0.2s linear;
        }

        .navbar .navbar-nav a:hover a::after {
            transform: scaleX(0.5);
        }

        .navbar .navbar-extra a {
            color: white;
            margin: 0 0.5rem;
        }

        .navbar .navbar-extra a:hover {
            color: var(--primary);
        }

        #hamburger-menu {
            display: none;
        }

        /* hero section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-image: url("../img/wp3.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
        }

        .hero::after {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 30%;
            bottom: 0;
            background: linear-gradient(
                0deg,
                rgba(1, 1, 3, 1) 8%,
                rgba(255, 255, 255, 0) 50%
            );
        }

        .hero .content {
            padding: 1.4rem 7%;
            max-width: 60rem;
        }

        .hero .content h1 {
            font-size: 5em;
            color: white;
            text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
            line-height: 1.2;
        }

        .hero .content h1 span {
            color: rgb(255, 255, 255);
        }

        .hero .content p {
            font-size: 1.6rem;
            margin-top: 1rem;
            line-height: 1.4rem;
            font-weight: 100;
            color: white;
            text-shadow: 1px 1px 3px rgb(255, 255, 255);
            /* mix-blend-mode: difference; */
        }

        .hero .content .cta {
            margin-top: 1rem;
            display: inline-block;
            padding: 1rem 3rem;
            font-size: 1.4rem;
            color: white;
            background-color: var(--primary);
            text-decoration-line: none;
            border-radius: 0.5rem;
            box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
        }

        /* about section */
        .about {
            padding: 8rem 7% 1.4rem;
        }

        .about h2 {
            text-align: center;
            font-size: 2.6rem;
            margin-bottom: 3rem;
        }

        .about h2 span {
            color: var(--primary);
        }

        .about .row {
            display: flex;
        }

        .about .row .about-img {
            flex: 1 1 45rem;
        }

        .about .row .about-img img {
            width: 90%;
            border-radius: 5.5rem;
        }

        .about .row .content {
            flex: 1 1 35rem;
            padding: 1 1rem;
        }

        .about .row.content h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .about .row .content p {
            margin-bottom: 0.8rem;
            font-size: 1rem;
            font-weight: 100;
            line-height: 1.6;
        }

        /* Menu section */
        .menu {
            padding: 8rem 7% 1.4rem;
        }

        .menu h2 {
            text-align: center;
            font-size: 2.6rem;
            margin-bottom: 1rem;
        }

        .menu h2 span {
            color: var(--primary);
        }

        .menu p {
            text-align: center;
        }

        .menu .row {
            display: flex;
            flex-wrap: wrap;
            margin-top: 5rem;
            justify-content: center;
        }

        .menu .row .menu-card {
            text-align: center;
            padding-bottom: 4rem;
        }

        .menu .row .menu-card img {
            flex-wrap: wrap;
            margin: 4rem;
            border-radius: 50%;
            /* width: 50%; */
            height: 200px;
            width: 200px;
        }

        .menu .row .menu-card .menu-card-title {
            margin-top: 1.5rem auto 0.5rem;
        }

        /* kontak section */
        .kontak {
            padding: 8rem 7% 1.4rem;
        }

        .kontak h2 {
            text-align: center;
            font-size: 2.6rem;
            margin-bottom: 1rem;
        }

        .kontak h2 span {
            color: var(--primary);
        }

        .kontak p {
            text-align: center;
        }

        .kontak .row {
            display: flex;
            margin-top: 2rem;
            background-color: #222;
        }

        .kontak .row .map {
            flex: 1 1 45rem;
            width: 100%;
            object-fit: cover;
        }

        .kontak .row form {
            flex: 1 1 45rem;
            padding: 5rem 2rem;
            text-align: center;
        }

        .kontak .row form .input-grup {
            display: flex;
            align-items: center;
            margin-top: 2rem;
            background-color: var(--bg);
            border: 1px solid #eee;
            padding-left: 2rem;
        }

        .kontak .row form .input-grup input {
            width: 100%;
            padding: 2rem;
            font-size: 1.7rem;
            background: none;
            color: white;
        }

        .kontak .row form .btn {
            display: flex;
            border-radius: 10%;
            margin-top: 3rem;
            display: inline-block;
            padding: 1rem 3rem;
            font-size: 2rem;
            color: white;
            background-color: rgb(94, 50, 0);
            cursor: pointer;
        }

        .kontak .row form p {
            font-size: 1.2rem;
            margin-top: 1.5rem;
        }

        /* footer */
        footer {
            background-color: rgb(94, 50, 0);
            text-align: center;
            padding: 1rem 0 3rem;
            margin-top: 3rem;
        }

        footer .social {
            padding: 1rem 0;
        }

        footer .social a {
            color: white;
            margin: 1rem;
        }

        footer .social a:hover,
        footer .links a:hover {
            color: var(--bg);
        }

        footer .links {
            margin-bottom: 1.4rem;
        }

        footer .links a {
            color: white;
            padding: 0.7rem 1rem;
            text-decoration: none;
        }

        footer .credit a {
            color: rgb(151, 147, 147);
            font-weight: 700;
        }

        /* responsif */

        /* laptop */
        @media (max-width: 1366px) {
            html {
                font-size: 75%;
            }
        }

        /* tablet */
        @media (max-width: 768px) {
            html {
                font-size: 62.5%;
            }

            #hamburger-menu {
                display: inline-block;
            }

            .navbar .navbar-nav {
                position: absolute;
                top: 100%;
                right: -100%;
                background-color: rgb(44, 27, 1);
                width: 30rem;
                height: 100vh;
                transition: 0.3s;
            }

            .navbar .navbar-nav.active {
                right: 0;
            }
            .navbar .navbar-nav a {
                color: rgb(255, 255, 255);
                display: block;
                margin: 1.5rem;
                padding: 0.5rem;
                font-size: 2rem;
            }

            .navbar .navbar-nav a::after {
                transform-origin: 0 0;
            }

            .navbar .navbar-nav a:hover ::after {
                color: var(--primary);
                transform: scaleX(0.2);
            }

            .about .row {
                flex-wrap: wrap;
            }

            .about .row .about-img img {
                height: 24rem;
                object-fit: cover;
                object-position: center;
            }

            .about .row .content {
                padding: 0;
            }

            .about .row .content h3 {
                margin-top: 1rem;
                font-size: 2rem;
                text-align: center;
            }

            .about .row .content p {
                font-size: 0.9rem;
                text-align: center;
            }
            .menu p {
                font-size: 1.2rem;
                text-align: center;
            }

            .kontak .row {
                flex-wrap: wrap;
            }

            .kontak .row .map {
                height: 30rem;
            }

            .kontak .row form {
                padding-top: 0;
            }
        }

        /*hp */
        @media (max-width: 450px) {
            html {
                font-size: 55%;
            }

            .about .row .about-img img {
                height: 24rem;
                object-fit: cover;
                object-position: center;
                align-content: center;
            }
      }

    </style>
    <!-- css -->

    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- css nya -->
    <!-- <link rel="stylesheet" href="resources/css/style.css" /> -->
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">My <span>Profile</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang</a>
        <a href="#menu">Pendidikan</a>
        <a href="#kontak">Kontak</a>
      </div>

      <div class="navbar-extra">
        <!-- <a href="#" id="search"> <i data-feather="search"></i> </a>
        <a href="#" id="shopiping-cart">
          <i data-feather="shopping-cart"></i -->
        </a>
        <a href="#" id="hamburger-menu"> <i data-feather="menu"></i> </a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!--hero section start  -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Selamat datang<span> di Website saya</span></h1>
        <p>
          Taufiq Andrian
        </p>
        <a href="https://api.whatsapp.com/send?text=  " class="cta">Kirim Pesan</a>
      </main>
    </section>

    <!--hero section end  -->

    <!--about section start  -->
    <section class="about" id="about">
      <h2><span>Tentang</span> Saya</h2>
  <div class="row">
      <div class="about-img">
        <img src="{{ ('img/foto1.jpg') }}" alt="Tentang Kami" />
      </div>
      <div class="content">
        <h3>Sekilas Tentang Saya</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, vitae? Harum aliquam quas eum ad ut neque. Aperiam, alias ducimus!
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto iste possimus, non quam enim distinctio ducimus reiciendis explicabo cumque id quisquam labore deleniti veniam laboriosam similique culpa, perspiciatis minima dolore sed sequi corporis magnam voluptates?
        </p>
      </div>
    </section>
  </div>
    <!--about section end  -->


    <!--menu section start  -->
    <section class="menu" id="menu">
      <h2><span>Pendidikan</span> Saya</h2>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At voluptatibus aliquid ut officiis vitae totam.</p>
      
      <div class="row">
        <div class="menu-card">
          <img src="{{ ('img/lgsd.png') }}" alt="Espresso" class="menu-card-img">
          <h3 class="menu-card-title">SDN 2 Medana</h3>
          <!-- <p class="menu-card-price">IDR 15K</p> -->
        </div>
        <div class="menu-card">
          <img src="{{ ('img/smp2.png') }}" alt="Espresso" class="menu-card-img">
          <h3 class="menu-card-title">SMP 2 Tanjung</h3>
          <!-- <p class="menu-card-price">IDR 15K</p> -->
        </div>
        <div class="menu-card">
          <img src="{{ ('img/sma.jpg') }}" alt="Espresso" class="menu-card-img">
          <h3 class="menu-card-title">SMA 1 Tanjung</h3>
          <!-- <p class="menu-card-price">IDR 15K</p> -->
        </div>
        <div class="menu-card">
          <img src="{{ ('img/ubg.png') }}" alt="Espresso" class="menu-card-img">
          <h3 class="menu-card-title">Universitas Bumigora Mataram</h3>
          <p class="menu-card-price">D3 RPL Aplikasi</p>
        </div>
        <div class="menu-card">
          <img src="{{ ('img/ubg.png') }}" alt="Espresso" class="menu-card-img">
          <h3 class="menu-card-title">Universitas Bumigora Mataram</h3>
          <p class="menu-card-price">S1 RPL</p>
        </div>
        
      </div>
    </section>
    <!--menu section end  -->

    <!--kontak section start  -->
      <section class="kontak" id="kontak">
        <h2><span>Kontak</span> Saya</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In esse eveniet cupiditate hic, quam sequi ex? Animi unde fuga quaerat nostrum adipisci consequuntur. Numquam, hic!</p>
        
        <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126300.88917669332!2d116.04521975423623!3d-8.411208149734247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcddad74a275307%3A0x947760e643a23d21!2sKec.%20Tj.%2C%20Kabupaten%20Lombok%20Utara%2C%20Nusa%20Tenggara%20Bar.!5e0!3m2!1sid!2sid!4v1677252363622!5m2!1sid!2sid"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
          
          <form action="">
            <p>Instagram : Ofikiyok_</p>
            <p>Facebook  : Ofikiyok</p>
            <p>WhatsApp  : 082339088465</p>
            <p>E-mail    : taufiqandrian99@gmail.com</p>
            <!-- <div class="kontak-person">
              <a href="#"><i data-feather="instagram"></i></a>
              <a href="#"><i data-feather="twitter"></i></a>
              <a href="#"><i data-feather="facebook"></i></a>
            </div> -->
            <!-- <div class="input-grup">
              <i data-feather="phone"></i>
              <input type="text" placeholder="no hp">
            </div> -->
            <!-- <button type="submit" class="btn"><i data-feather="instagram"></i>Ofikiyok_</button>
            <button type="submit" class="btn"><i data-feather="facebook"></i> facebook</button>
            <button type="submit" class="btn"><i data-feather="whatsapp"></i> WhatsApp</button> -->
            <!-- <div class="card-social" style="width: 18rem;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
              </ul>
            </div> -->
          </form>
        </div>
      </section>
    <!--kontak section end  -->
    
    <!--footer section end  -->
    <footer>
      <div class="social">
        <a href="https://www.instagram.com/"><i data-feather="instagram"></i></a>
        <a href="https://twitter.com/login?lang=id"><i data-feather="twitter"></i></a>
        <a href="https://www.facebook.com/"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang</a>
        <a href="#menu">Menu</a>
        <a href="#kontak">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">Taufiq Andrian</a>. | &copy; 2023 </p>
      </div>
    </footer>
    <!--footer section end  -->


    <!-- icons -->
    <script>
      feather.replace();
    </script>

    <!-- script humberger -->
    <!-- <script src="resources/js/script.js"></script> -->
    <script>
      //toggle clas active
      const navbarNav = document.querySelector(".navbar-nav");
      //ketika hubergermenu di klik
      document.querySelector("#hamburger-menu").onclick = () => {
          navbarNav.classList.toggle("active");
      };

      //menghilangkan navbar menu
      const hamburger = document.querySelector("#hamburger-menu");

      document.addEventListener("click", function (e) {
          if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
              navbarNav.classList.remove("active");
          }
      });

    </script>
  </body>
</html>
