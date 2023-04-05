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
          <a class="nav-link active" href="voirchauffeur.php">Liste Chauffeurs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="voirclient.php">Liste Client</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnexion.php">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <h1 class="divc"><img src="image1.png" ></img><br><?=$titre ?></h1>
    <div class="container">
        <?=$container ?>
    </div>
</body>
</html>