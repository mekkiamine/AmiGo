<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title><?= $name ?></title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="menu.php">AmiGo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://www.amigo.tn">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <h1 class="divc"><?=$titre ?><br><img src="image1.png" ></img></h1>
    <div class="container">
        <?=$container ?>
    </div>
    <div class="button">
        <a href="https://www.instagram.com/amigo.tunisie/?fbclid=IwAR3GjyLvBfLfHAvhuOCKTmyAPf0Ef29iDcfmURMzvo0tADpwULEuU_VtPs0"><img src="instagram.png" class="social " alt="instagram"></a>
        <a href="https://www.facebook.com/TunisieAmigo"><img src="meta.png" class="social " alt="meta"></a>
        <a href="https://www.tiktok.com/@amigotunisie?fbclid=IwAR039GJnWUXqn4D-N4w7SJ0sg9R0xrqZNE_STf9fzlNyv2unCtSNdX5WRnE"><img src="tiktokk.png" class="social " alt="tiktok"></a>
        <a href="https://www.amigo.tnx"><img src="web.png" class="social " alt="tiktok"></a>
    </div>
    
         <div class="button1"> <a class="nav-link" href="deconnexion.php"><img src="logout.png" alt="logout" class="social"></a></div>
     
</body>
</html>