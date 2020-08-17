<?php
 use App\classes\Services;
 use App\classes\Helper;
 ?>
<section id="service-section">
            <div class="container">
               <h3>my services</h3>
               <div class="services-box">
                  <div class="row">
                      <?php
                      $ob = Services::displayAllActiveServices();
                      while($serviceData = mysqli_fetch_assoc($ob)){ ?>
                          <div class="col-12 col-md-4 mb-4 col-sm-6">
                              <div class="card">
                                  <div class="card-body">
                                      <div class="icon-box">
                                           <i class="<?= $serviceData['icon'] ?>"></i>

                                      </div>
                                      <h4> <?= substr($serviceData['title'],0,20) ?></h4>
                                      <p class="pb-4"> <?= Helper::textShort($serviceData['description'],150) ?></p>
                                  </div>
                              </div>
                          </div>
<?php } ?>


                     <!--col card-end -->

                  </div>
               </div>
            </div>
         </section>
         <hr>