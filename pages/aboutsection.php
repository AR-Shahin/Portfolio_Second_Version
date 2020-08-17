
<section id="about-section">
            <div class="container">
               <div class="row">
                  <div class="col-12 col-md-6 mb-3 col-lg-6 align-self-center">
                   <!--   <div class="my-carousel owl-carousel">
                        <div class="img-box">
                            <img src="Resources/Images/img.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="img-box">
                            <img src="Resources/Images/img2.JPG" alt="" class="img-fluid">
                        </div>  
                        <div class="img-box">
                            <img src="Resources/Images/IMG_9340.JPG" alt="" class="img-fluid">
                        </div>  
                        <div class="img-box">
                            <img src="Resources/Images/img3.JPG" alt="" class="img-fluid">
                        </div>                 
                    </div> --><!-- main carousel -->
                    
                    <div class="shahin-carousel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block img-fluid" src="Resources/Images/img.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block img-fluid" src="Resources/Images/img2.JPG" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block img-fluid" src="Resources/Images/img3.JPG" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block img-fluid" src="Resources/Images/IMG_9340.JPG" alt="Third slide">
                        </div>
                         <div class="carousel-item">
                          <img class="d-block img-fluid" src="Resources/Images/ars.jpeg" alt="Third slide">
                        </div>
                      </div>
                      
                    </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 mb-3 col-lg-6 ">
                     <div class="about-me-description">
                        <h3>about me</h3>
                         <?php
                       use App\classes\Site;
                       $ob = Site::siteIdenity();
                       $siteData = mysqli_fetch_assoc($ob);
                         ?>
                        <div class="description">
                           <p>
                               <?= $siteData['abt_txt']?>
                           </p>
                        </div>
                        <div class="about-btn-box">
                           <a href="#contact-section" class="btn abt-btn">Hire me</a>
                           <a href="resume.html" class="btn abt-btn">resume</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <hr>
