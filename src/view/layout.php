<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heely Crocs - <?php echo $title; ?></title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/din1dqj.css">
  <?php echo $css; ?>
  <!-- CSS inladen -->
</head>

<body>
  <nav class="nav container">
    <ul class="nav-list grid">
      <li class="nav-item">
        <a class="nav-link" href="">tutorial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""><img class="logo" src="./assets/img/logo.jpg" alt=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">tutorial</a>
      </li>
    </ul>
  </nav>
  <main>
    <?php echo $content; ?>
  </main>
  <footer>

  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js" integrity="sha512-BB7rb8ZBAxtdJdB7nwDijJH9NC+648xSzviK9Itm+5APTtdpgKz1+82bDl4znz/FBhd0R7pJ/gQtomnMpZYzRw==" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
  <?php echo $js; ?>
</body>

</html>
