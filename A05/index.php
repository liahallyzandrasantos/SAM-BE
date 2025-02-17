<?php
include("connect.php");

$islandQuery = "SELECT * FROM islandsofpersonality";
$islandResult = executeQuery($islandQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>A05</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="media/jirocat.jpg" type="image/jpeg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
      font-family: "Lato", sans-serif;
      margin-top: 80px;
      background-color: #212529;
    }

    .carousel-item img {
      object-fit: cover;
      min-height: 100vh;
      transition: opacity 0.3s ease;
    }

    .carousel-item:hover img {
      opacity: 0.7;
    }

    .carousel-item .carousel-caption {
      z-index: 10;
    }

    h5 {
      color: white;
      font-family: "Poppins", sans-serif;
    }
  </style>
</head>

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
            <a class="nav-link" href="https://liahallyzandrasantos.github.io/SAM-BE/">Main Page</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid" style="margin-top: 80px;">
    <div id="islandCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php $active = 'active'; ?>
        <?php while ($islandRow = mysqli_fetch_assoc($islandResult)): ?>
          <div class="carousel-item <?php echo $active; ?>">
            <a href="view.php?id=<?php echo $islandRow['islandOfPersonalityID']; ?>">
              <img src="<?php echo $islandRow["image"]; ?>" class="d-block w-100" alt="Island Image">
              <div class="carousel-caption d-none d-md-block">
                <h5><?php echo ($islandRow['name']); ?> Island</h5>
              </div>
            </a>
          </div>
          <?php $active = ''; ?>
        <?php endwhile; ?>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#islandCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#islandCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Liah's Website</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
