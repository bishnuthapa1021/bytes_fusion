<!doctype html>
<html lang="en">
  @include('frontend.includes.head');
  <body>
    
  @include('frontend.includes.header')


  <!---------------------------- Top close ------------------------------------ -->

@include('frontend.includes.navbar')


  <!---------------------------- navbar close ------------------------------------ -->

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="mask flex-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-12 order-md-1 order-2">
                            <h4>Responsive Website <br> Desingn</h4>
                            <p>We makes web pages render well on a variety of devices and window or screen sizes. You need to provide the audience a mobile-friendly site. So making your website responsive is an essential aspect of your online presence.</a> <br>  
                        </div>
                        <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{ asset('public/assets/img/mobile.png') }}" class="mx-auto img-fluid" alt="slide"></div>
                    </div>
                </div>
            </div>
        </div>


      <div class="carousel-item">
            <div class="mask flex-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-12 order-md-1 order-2"><br>
                            <h4>Branding & Identity<br> Design</h4>
                            <p>Our Brand Identity services include designing logo, brochure, branding guidelines, stationary, print design, brand revamp, and custom design services.</a> <!----<br> <br><br> <a href="#">GET STARTED</a>-->
                        </div>
                        <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{ asset('public/assets/img/brand.png') }}" class="mx-auto img-fluid" alt="slide"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="carousel-item">
            <div class="mask flex-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-12 order-md-1 order-2"><br>
                            <h4>Creative Illustrations & Graphics</h4>
                           
                            <p>Graphic design is important for any business looking to slay competition in the marketplace. To stay ahead of competitors in the marketplace, we create content that approaches an idea, solves a problem, or relieves a paint point in an innovative way.</p>  <!----<a href="#">GET STARTED</a>--->
                        </div>
                        <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{ asset('public/assets/img/graphic.png') }}" class="mx-auto img-fluid" alt="slide"></div>
                    </div>
                </div>
            </div>
        </div>
      
    </div> <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>

<!----------features section start -------->

<section id="features">
  <div class="cointainer">
  <div class="row fea-r1">
    <div class="col-lg-4 col-md-4 ">
     <div class="fea1" data-aos="fade-right">
       <ul>
         <li> <img src="{{ asset('public/assets/img/webdevelop.jpg') }}" class="d-block w-100" alt="..."> </li>
         <li><h2>WEB DEVELOPMENT</h2></li>
         <li> <p>Web pages that render well on a variety of devices and window or screen sizes<br></p> </li>
       </ul>
     
     </div>
    </div><!---col close-->

    <div class="col-lg-4 col-md-4 ">
      <div class="fea1" data-aos="fade-up">
        <ul>
          <li> <img src="{{ asset('public/assets/img/videophoto.jpg') }}" class="d-block w-100" alt="..."> </li>
          <li><h2>VIDEO / PHOTO</h2></li>
          <li> <p>Capturing your moments with attractive video and photography.</p> </li>
        </ul>
      
      </div>
     </div><!---col close-->

     <div class="col-lg-4 col-md-4 ">
      <div class="fea1" data-aos="fade-left">
        <ul>
          <li> <img src="{{ asset('public/assets/img/digitalmarket.jpg') }}" class="d-block w-100" alt="..."> </li>
          <li><h2>DIGITAL MARKETING</h2></li>
          <li> <p>Digital marketing lets you communicate directly with the customers and create an online brand representation.</p> </li>
        </ul>
      
      </div>
     </div><!---col close-->

  </div><!---row close-->
</div><!---con close-->
</section>
<!----------features section ends -------->

@include('frontend.includes.aboutUs')
 <!------Bio end-->

<!-----service section start -->
@include('frontend.includes.services')
   <!---------service section close-->

<!---------Our Project --------->

 @include('frontend.includes.ourServices')
  <!------3d section close-->


  <!-------------------- footer section ------------------------->


  @include('frontend.includes.footer')

<!-------Button up---->



<!-----button end---->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    

<!-----AOS Animation link----->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<!-------counter section js------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(document).ready(function() {

  $('.counter').each(function () {
  $(this).prop('Counter',0).animate({
  Counter: $(this).text()
  }, {
  duration: 4000,
  easing: 'swing',
  step: function (now) {
  $(this).text(Math.ceil(now));
  }
  });
  });
  
  });
</script>

<!--------Counter section js close------->

<!-------owl carousel start ------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

$('.owl-carousel').owlCarousel({
mouseDrag:false,
loop:true,
margin:2,
nav:true,
responsive:{
0:{
items:1
},
600:{
items:1
},
1000:{
items:3
}
}
});

$('.owl-prev').click(function() {
$active = $('.owl-item .item.show');
$('.owl-item .item.show').removeClass('show');
$('.owl-item .item').removeClass('next');
$('.owl-item .item').removeClass('prev');
$active.addClass('next');
if($active.is('.first')) {
$('.owl-item .last').addClass('show');
$('.first').addClass('next');
$('.owl-item .last').parent().prev().children('.item').addClass('prev');
}
else {
$active.parent().prev().children('.item').addClass('show');
if($active.parent().prev().children('.item').is('.first')) {
$('.owl-item .last').addClass('prev');
}
else {
$('.owl-item .show').parent().prev().children('.item').addClass('prev');
}
}
});

$('.owl-next').click(function() {
$active = $('.owl-item .item.show');
$('.owl-item .item.show').removeClass('show');
$('.owl-item .item').removeClass('next');
$('.owl-item .item').removeClass('prev');
$active.addClass('prev');
if($active.is('.last')) {
$('.owl-item .first').addClass('show');
$('.owl-item .first').parent().next().children('.item').addClass('prev');
}
else {
$active.parent().next().children('.item').addClass('show');
if($active.parent().next().children('.item').is('.last')) {
$('.owl-item .first').addClass('next');
}
else {
$('.owl-item .show').parent().next().children('.item').addClass('next');
}
}
});

});
</script>

<script type="text/javascript">
  $(document).ready(function(){

$('#myCarousel').carousel({
interval: 3000,
})

});
</script>

<!-------owl carousel ends ------->

<!---3d effect--->
<script type="text/javascript">
  (function() {
    // Add event listener
    document.addEventListener("mousemove", parallax);
    const elem = document.querySelector("#parallax");
    // Magic happens here
    function parallax(e) {
        let _w = window.innerWidth/2;
        let _h = window.innerHeight/2;
        let _mouseX = e.clientX;
        let _mouseY = e.clientY;
        let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
        let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
        let _depth3 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
        let x = `${_depth3}, ${_depth2}, ${_depth1}`;
        console.log(x);
        elem.style.backgroundPosition = x;
    }

})();
</script>
<!-----3d object end-->

<!----our client----->
<script>
  $(document).ready(function() {
    $("#news-slider").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true
    });
});
</script>


<!-----our clients end-->

<script>
  AOS.init();
</script>

  </body>
</html>