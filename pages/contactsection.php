<?php
use App\classes\Site;
$ob = Site::displaySocialLink();
$socialLinks = mysqli_fetch_assoc($ob);;
?>
<section id="contact-section">
    <h3>contact with me</h3>
    <div class="container">
        <div class="contact-form">
            <div class="row">
                <div class="col-12 col-md-6 mb-3 align-self-center">
                    <ul>
                        <li>
                            <a href="<?= $socialLinks['facebook'] ?>" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span><i class="fab fa-facebook"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $socialLinks['twitter'] ?>" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span><i class="fab fa-twitter"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $socialLinks['stackover'] ?>" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span><i class="fab fa-instagram"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $socialLinks['github'] ?>" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span><i class="fab fa-github"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $socialLinks['linkedin'] ?>" target="_blank">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span><i class="fab fa-linkedin"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 mb-3 align-items-center">
                    <div class="my-form">
                        <form method="post" action="../admin/insert.php">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name" name="fname">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name" name="lname">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12">
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12">
                                    <input type="email" class="form-control" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12">
                                    <textarea name="txt" id="" cols="30" rows="5" placeholder="Write your text * "></textarea>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12">
                                    <div class="form-box">
                                        <input type="submit" value="Send" class="btn btn-form" name="mail-btn">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>