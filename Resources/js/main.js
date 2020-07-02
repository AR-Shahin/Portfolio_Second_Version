$(document).ready(function(){
  var $grid =  $('.grid').isotope({
  itemSelector: '.grid-item',
  percentPosition: true,
  masonry: {
    // use outer width of grid-sizer for columnWidth
    columnWidth: '.grid-sizer'
  }
});
    
    
$('.btn-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});
    /* projects btn*/
    $('.btn').click(function(){    $(this).addClass('active').siblings().removeClass('active');
    });
     /* card-first-carousel*/
    
    $('.container-fluid').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',
  gallery: {
  enabled: true
  }
});
      var typed3 = new Typed('.type', {
    strings: ['Web Designer', 
              'Graphic Designer', 
              'Freelencher',
              'Photographer'],
    typeSpeed: 80,
    backSpeed: 50,
    smartBackspace: true, // this is a default
    loop: true
  });
    $('.scroll-top').click(function(){
        $('html,body').animate({
            scrollTop : 0
        }),200;
    });
    /*================ OWL CAROUSEL ABOUT ME SECTION ============ */
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    freeDrag:true,
    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
    
});