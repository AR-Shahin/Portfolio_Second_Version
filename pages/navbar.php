<?php
use App\classes\Site;
$ob = Site::siteIdenity();
$siteData = mysqli_fetch_assoc($ob);
?>
            <div class="my-nav fixed-top" style="background: rgba(34, 47, 62, 0.88);">
               <div class="container">
                  <nav class="navbar navbar-expand-lg">
                     <a class="navbar-brand" href="#"><img src="Resources/Images/<?= $siteData['logo']?>" alt=""></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span><i class="fas fa-bars"></i></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                           <li class="nav-item">
                              <a class="nav-link" href="#about-section">About Me</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#service-section">services</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#portfolio-section">portfolio</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#programming-code-section">programming</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#contact-section">contact</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>