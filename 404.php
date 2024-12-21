<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="media/jirocat.jpg" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>NOT FOUND</title>
</head>

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

    h2 {
        color: white;
        border: 1px solid white;
        border-radius: 15px;
        font-size: 2.5rem;
    }

    .card {
        margin-top: 20px;
        width: 80%;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }

    .image-container img {
        max-width: 100%;
        height: 200px;
    }

    .card-body {
        font-size: 1.2rem;
    }

    .btnContainer {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .btn-light {
        border: 2px solid #007bff; 
        background-color: transparent; 
        transition: all 0.3s ease;
        padding: 10px 30px;
        border-radius: 20px;
    }

    .btn-light:hover {
        background-color: turquoise;
        color: #212529;
        border-color: turquoise;
    }

    a.btn-light img {
        width: 90px;
        height: 90px;
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

<body>

    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <h3 class="navbar-brand flex-sm-fill" style="color: white">
                <img src="media/jirocat.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Liah Allyzandra's Portfolio
            </h3>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="image-container">
            <img src="media/catcaution.png" alt="Warning Image">
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body bg-dark">
                <h4 class="card-title" style="color:white; text-align:center">PAGE NOT FOUND!</h4>
                <p class="card-text" style="color:white; text-align:center">This is a... quiet spot you have bumped
                    with. Try to go back.</p>
            </div>
        </div>
    </div>

    <div class="btnContainer">
        <a href="https://liahallyzandrasantos.github.io/" class="btn btn-light border border-secondary rounded"
            style="text-decoration: none;">
            <img src="media/catok.png" alt="Back Button">
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
