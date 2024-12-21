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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      font-family: "Lato", sans-serif
    }

    .mySlides {
      display: none;
    }

    /* Style for navigation buttons */
    .prev,
    .next {
      position: absolute;
      top: 50%;
      padding: 16px;
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      cursor: pointer;
      font-size: 18px;
      transition: 0.3s;
      z-index: 1;
    }

    .prev {
      left: 0;
    }

    .next {
      right: 0;
    }

    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)"
        onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <div class="w3-bar-item w3-button w3-padding-large w3-center w3-large">Liah's Island</div>
      <div class="w3-dropdown-hover w3-hide-small"></div>
    </div>
  </div>

  <!-- Page content -->
  <div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- Manual Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
      <a href="https://www.example.com/page1">
        <img src="media/xiao1.jpg" style="width:100%">

        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          <h3>1</h3>
          <?php while ($islandRow = mysqli_fetch_assoc($islandResult)): ?>
            <div> <!-- Added a div to wrap the content properly -->
              <h5><?php echo ($islandRow['name']); ?> Island</h5> 
            </div>
          <?php endwhile; ?>
        </div>

      </a>
      <div class="mySlides w3-display-container w3-center">
        <a href="https://www.example.com/page2">
          <img src="media/xiao2.jpg" style="width:100%">
        </a>
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          <h3>2</h3>
          <p><b>This is nothing new to me.</b></p>
        </div>
      </div>
      <div class="mySlides w3-display-container w3-center">
        <a href="https://www.example.com/page3">
          <img src="media/xiao3.jpg" style="width:100%">
        </a>
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          <h3>3</h3>
          <p><b>Disperse.</b></p>
        </div>
      </div>
      <div class="mySlides w3-display-container w3-center">
        <a href="https://www.example.com/page4">
          <img src="media/xiao3.jpg" style="width:100%">
        </a>
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          <h3>4</h3>
          <p><b>Disperse.</b></p>
        </div>
      </div>

      <!-- Navigation buttons -->
      <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
      <button class="next" onclick="plusSlides(1)">&#10095;</button>

      <!-- Footer -->
      <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Go back to <a href="https://liahallyzandrasantos.github.io/SAM-BE/" target="_blank">Main
            Page</a></p>
      </footer>

      <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        // Show slides
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          if (n > slides.length) {
            slideIndex = 1;
          }
          if (n < 1) {
            slideIndex = slides.length;
          }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slides[slideIndex - 1].style.display = "block";
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
          var x = document.getElementById("navDemo");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }
      </script>

</body>

</html>