<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="media/jirocat.jpg" type="image/jpeg">
    <title>Liah's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: "Poppins", sans-serif;
            background-color: #212529;
        }

        .container-fluid {
            padding: 2px;
            text-align: left;
            color: #cc1772;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .design {
            margin-top: 20px;
            padding: 5px;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .button {
            margin: 20px;
            padding: 10px;
            border: 1px solid white;
            color: white;
            background-color: #212529;
            opacity: 0.6;
            transition: opacity 0.5;
            flex: 1 1 200px;
            max-width: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
        }
        
        .button:hover {
            background-color: turquoise;
            color: #000;
            opacity: 0.8;
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        
        .button-img {
            max-width: 100px; 
            max-height: 100px;
            margin-bottom: 10px; 
        }
        
        .button span {
            text-align: center;
            color: white;
            font-size: 16px;
        }
        
        .card {
            margin-top: 30px;
            width: 80%;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .card-body {
            font-size: 1.2rem;
        }

        h5 {
            color: white;
            font-family: "Poppins", sans-serif;
            border: 1px solid black;
            border-radius: 20px;
            background-color: black;
            padding: 5px 10px;
            margin: 2px;
            display: inline-block;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .image-container img {
            max-width: 100%;
            height: 200px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 20px;
            margin-top: 30px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item {
            position: relative;
            width: 100%;
            height: auto;
            overflow: hidden;
        }

        .gallery-item:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
   
        .gallery-item:hover .gallery img {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); 
        }
        
        .hover-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 18px;
            font-weight: bold;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
            text-shadow: 4px 4px 6px black;
            z-index: 1;
        }

       .hover-text h3 {
            font-size: 25px;
        }

        .hover-text p {
            font-size: 14px;
        }
        
        
        .gallery-item:hover .hover-text {
            opacity: 1;
        }

        .floating-tab {
            position: fixed;
            bottom: 20px; 
            left: 50%;
            transform: translateX(-50%); 
            z-index: 1000; 
        }
        
        .floating-icon {
            width: 150px; 
            height: 100px; 
            margin-right: 5px;
            cursor: pointer; 
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); 
            transition: transform 0.3s ease, opacity 0.3s ease; 
        }
        
        .floating-icon:hover {
            transform: scale(1.1); 
        }
        
        

        @media (max-width: 1200px) {
            .gallery {
                grid-template-columns: repeat(5, 1fr);
            }
        }

        @media (max-width: 992px) {
            .gallery {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 768px) {
            .gallery {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 576px) {
            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 400px) {
            .gallery {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 24px;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <h2 class="navbar-brand flex-sm-fill" style="color: white">
                <img src="media/jirocat.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Liah's Portfolio
            </h2>
        </div>
    </nav>

    <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="media/shou.gif" class="d-block w-100" alt="Xiao">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="img-title" style="color: white; text-align:center; text-shadow:2px 2px 4px rgba(0, 0, 0, 0.7)">Xiao of Genshin Impact</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="media/aven.gif" class="d-block w-100" alt="Aventurine">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="img-title" style="color: white; text-align:center; text-shadow:2px 2px 4px rgba(0, 0, 0, 0.7)">Aventurine of Honkai: Star Rail</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="media/xiang.gif" class="d-block w-100" alt="Xiangli Yao">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="img-title" style="color: white; text-align:center; text-shadow:2px 2px 4px rgba(0, 0, 0, 0.7)">Xiangli Yao of Wuthering Waves</h4>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container-fluid">
        <div class="image-container">
            <img src="media/catlurk.png">
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body bg-dark">
                <h4 class="card-title" style="color:white; text-align:center">You see up there?</h4>
                <p class="card-text" style="color:white; text-align:center">I play those games and yeah, I used it for design. Hehe.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="image-container">
            <img src="media/cathi.png">
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body bg-dark">
                <h4 class="card-title" style="color:white; text-align:center">Hello!</h4>
                <p class="card-text" style="color:white; text-align:center">I'm Liah Allyzandra and welcome to my space! Here I place my works!</p>
            </div>
        </div>
    </div>

    <div class="design" id="design">
        <a href="A05/index.php" class="button">
            <img src="media/catjin.png" class="button-img"> A05
        </a>
    </div>

    <div class="container-fluid">
        <div class="image-container">
            <img src="media/catlurk.png">
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body bg-dark">
                <h4 class="card-title" style="color:white; text-align:center">Additional Fact~!</h4>
                <p class="card-text" style="color:white; text-align:center">I'm a Hotarubi student. Which house are you?</p>
            </div>
        </div>
    </div>

    <div class="gallery">
        <div class="gallery-item">
            <img src="media/Jin_Kamurai_Icebound_Tyrant_image.webp">
            <div class="hover-text">
                <h3 style="text-align:center">Frostheim</h3>
                <p style="text-align:center">You seem to have an appreciation for the sophisticated and exclusive environments often associated with affluent lifestyles.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="media/Alan_Mido_Wrested_Truth_image.webp">
            <div class="hover-text">
                <h3 style="text-align:center">Vagastrom</h3>
                <p style="text-align:center">You appear to be drawn to environments characterized by unpredictability and disorder.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="media/Haru_Sagara_Vibrant_Safari_image.webp">
            <div class="hover-text">
                <h3 style="text-align:center">Jabberwock</h3>
                <p style="text-align:center">You seem to enjoy environments where exciting and enjoyable experiences are frequent.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="media/Taiga_Hoshibami_Notorious_Visionary_image.webp">
            <div class="hover-text">
                <h3 style="text-align:center">Sinostra</h3>
                <p style="text-align:center">You are drawn to environments where you can achieve personal gains while managing situations with professionalism and expertise.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="media/Subaru_Kagami_Hazy_Spectacle_image.webp">
            <div class="hover-text">
                <h3 style="text-align:center">Hotarubi</h3>
                <p style="text-align:center">You are drawn to places that provide tranquility, offering a peaceful refuge from the chaotic noise of the outside world.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="media/Edward_Hart_Dark_Prince_image (1).webp">
            <div class="hover-text">
                <h3 style="text-align:center">Obscuary</h3>
                <p style="text-align:center">You are attracted to places where the unconventional prevails, and where uniqueness and peculiarity are embraced over the ordinary.</p>
            </div> 
        </div>
        <div class="gallery-item">
            <img src="media/Yuri_Isami_Maverick_Doctor_image.png">
            <div class="hover-text">
                <h3 style="text-align:center">Mortkranken</h3>
                <p style="text-align:center">You are drawn to environments where the pursuit of scientific progress and the drive for new discoveries take precedence above all else.</p>
            </div>
        </div>
    </div>

    <div class="floating-tab">
        <a href="#design" class="floating-icon-link">
            <img src="media/tab.jfif" alt="Tab Icon" class="floating-icon">
        </a>
    </div>
    

    <footer style="background-color: #212529; text-align: center; padding: 20px; color: white; box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.5);">
        <p>&#169; Liah's Portfolio. All rights reserved.</p>
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
