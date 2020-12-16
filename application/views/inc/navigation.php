<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Devinbox-News</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Actualité</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url().'/main_controller/post';?>">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url().'/main_controller/contact';?>">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url().'/main_controller/signin';?>"><i class="fa fa-power-off"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Créer un Article</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>