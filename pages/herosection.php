
<header id="home">
    <!------------------------------------------- HERO SECTION ---------------------------------------------------- -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="hero-text">
                        <span>Hello,I'm</span>
                        <h2>Anisur Rahman Shahin</h2>
                        <div class="tagline">
                            <div class="cd-intro">
                                <h6 class="cd-headline letters rotate-2">
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">Web Designer</b>
                                    <b>GraphicDesigner</b>
                                    <b>Photographer</b>
                                </span>
                                </h6>
                            </div> </div>
                        <!--   <h6 style="font-size: 18px;m-0;p-0"><i>Web Designer</i></h6> -->
                        <?php
                        use App\classes\Site;
                        $ob = Site::displaySocialLink();
                        $socialLinks = mysqli_fetch_assoc($ob);;
                        ?>
                        <div class="hero-social-media">
                            <ul>
                                <li><a href="<?= $socialLinks['facebook'] ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="<?= $socialLinks['twitter'] ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?= $socialLinks['github'] ?>" target="_blank"><i class="fab fa-github"></i></a></li>
                                <li><a href="<?= $socialLinks['stackover'] ?>" target="_blank"><i class="fab fa-stack-overflow"></i></a></li>
                                <li><a href="<?= $socialLinks['linkedin'] ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    