<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>TSF BANK</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style1.css">
  </head>
  
  <body>  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="https://www.thesparksfoundationsingapore.org/about/news/">News</a>
        <a href="https://www.thesparksfoundationsingapore.org/contact-us/">Contact</a>
        <a href="about.php">About</a>
        <a style="color: white" onclick="myFunction1()">Dark Mode</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
     </div>
     <div style="margin-top: 25px">
     <center><h1 class="ml1">
        <span class="text-wrapper">
          <span class="line line1"></span>
          <span class="letters">Welcome To TSF BANK</span>
          <span class="line line2"></span>
        </span>
      </h1>
    <img style="width: 250px; height:140.63px;" src="image/logo_small.png">
    </center> 
    </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <a href="view.php" class="btn btn-info" role="button">View All Customers</a>
        <a href="history.php" class="btn btn-info" role="button">Transfer History</a>
      </div>
      <div class="footer">
        <p>&copy; Copyright 2021 Aman Jha</p>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
    <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
        function myFunction1() {
            var element = document.body;
            element.classList.toggle("dark-mode");
            }
            // Wrap every letter in a span
            var textWrapper = document.querySelector('.ml1 .letters');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

            anime.timeline({loop: true})
            .add({
                targets: '.ml1 .letter',
                scale: [0.3,1],
                opacity: [0,1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 600,
                delay: (el, i) => 70 * (i+1)
            }).add({
                targets: '.ml1 .line',
                scaleX: [0,1],
                opacity: [0.5,1],
                easing: "easeOutExpo",
                duration: 700,
                offset: '-=875',
                delay: (el, i, l) => 80 * (l - i)
            }).add({
                targets: '.ml1',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
        </script>

  </body>
</html>