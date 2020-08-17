<?php
use App\classes\Site;
$ob = Site::siteIdenity();
$siteData = mysqli_fetch_assoc($ob);
?>
<footer>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <p class = "m-0"><?=$siteData['footer_txt'] ?></p>
            </div>
        </div>
    </div>
</footer>


<div class="scroll-top"><a href="#home"><i class="fas fa-angle-double-up"></i></a></div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="Resources/js/animated-headline.js"></script>

<!-- main Js -->
<script src="Resources/js/main.js"></script>
<script>
    $('.scroll-top').click(function(){
        $('html,body').animate({
            scrollTop : 0
        }),100;
    });
    $('.scroll-top').hide();
    $(window).scroll(function(){
        var count = $(this).scrollTop();

        if(count < 100){
            $('.scroll-top').hide()
        }
        else{
            $('.scroll-top').show();
            ;
        }
    });
    $('.carousel').carousel({
        interval: 2000
    })
</script>
</body>
</html>