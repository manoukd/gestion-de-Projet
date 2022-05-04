<header>   
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar ">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href=" " target=" ">
          <img src="../src/images/logo.PNG" alt="Logo">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link waves-effect  " href="#" target="_blank">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#propos" target="_blank">Qui sommes nous ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#blog" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#contactus" target="_blank">Contactez-nous</a>
            </li>
          </ul>
 
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="#inscription" class="nav-link border border-light rounded waves-effect mr-2" target="_blank">
                <i class="fas fa-envelope mr-1">s'inscrire</i>
              </a>
              
            </li>
            <li class="nav-item">
              <a href="" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"><img src="../src/images/bootstrapicon/envelope-fill.svg" class=""></i>
              </a>
            </li> 
            <li class="nav-item">
              <a href="" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"><img src="../src/images/bootstrapicon/twitter.svg" alt="Twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href=" " class="nav-link waves-effect" target="_blank">
                <i class="fab fa-github"><img src="../src/images/bootstrapicon/linkedin.svg" alt="Linkedin"></i>
              </a>
            </li>
           
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Intro -->
    <div class="card card-intro blue-gradient bg-primary " style=" border-radius:0;">
      <div class="card-body white-text rgba-black-light container">
        <!--Grid row-->
        <div class="row d-flex ">
          <!--Grid column-->
          <div class="">

            <p class="h3 mb-0 font-weight-bold">
               <label class="bg-white text-primary"> GESTION </label>  <label for="" class="text-white">DES PROJETS</label>            
            </p>                    
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
        <div class="connec-line d-flex flex-row ">
          <div>

          </div>
          <nav class="nav-flex col-md-12">
        
            <?php
            if (isset($_SESSION)&&(!empty($_SESSION))) 
            {
            ?>
              <a href="logout.php" class="header-btn-connexion" target="_blank"> 
              <button type="button" class="btn btn-danger btn-justify-right"> Deconnexion</button>
            </a>
            <?php
            } else
            {
             ?>
              <a href="#connexion" class="header-btn-connexion" target="_blank">
              <button type="button" class="btn btn-danger btn-justify-right"> Connexion</button>

            </a>
            <?php  
            
           }            
            ?>
           
          </nav>
        </div>
       
      </div>

    </div>
    <!-- Intro -->


  </header>
  <!-- Navigation -->
