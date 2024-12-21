<?php
include("connect.php");
$id = $_GET['id'];
$islandQuery = "SELECT islandsofpersonality.*, islandcontents.*
FROM islandsofpersonality
INNER JOIN islandcontents 
ON islandsofpersonality.islandOfPersonalityID = islandcontents.islandOfPersonalityID
WHERE islandsofpersonality.islandOfPersonalityID = $id;
";
$islandResult = executeQuery($islandQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
        font-family: "Lato", sans-serif;
        margin-top: 80px;
        background-color: #212529;
    }

    .card {
        width: 100%;
        max-width: 500px;
        margin: auto;
        background-color: transparent;
    }

    .card-img-top {
        object-fit: cover;
        max-height: 400px;
    }

    .card-body {
        text-align: center;
        background-color: transparent;
        color: white;
    }

    .card-desc h5 {
        font-size: 1.2rem;
    }
</style>

<body>

<div class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Liah's Island</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Back</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <?php while ($islandRow = mysqli_fetch_assoc($islandResult)): ?>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo $islandRow["image"]; ?>" class="d-block w-100 card-img-top"
                                    alt="Island Image">
                            </div>
                            <div class="card-desc">
                                <h5><?php echo ($islandRow['content']); ?> Island</h5>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Liah's Website</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>